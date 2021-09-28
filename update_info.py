#!/usr/bin/env python
# coding: utf-8

from bs4 import BeautifulSoup
import requests
import yaml
import sys

try:
    thingToUpdate = sys.argv[1]
except IndexError:
    print('Usage: python update_info.py [plugins|themes]')
    exit()

if thingToUpdate not in ['plugins', 'themes']:
    print('Must specify "plugins" or "themes" exactly')
    exit()

R = requests.get(f"https://omeka.org/classic/{thingToUpdate}/")

soup = BeautifulSoup(R.text, "html.parser")

entries = soup.select(".addon-entry")

def get_description_url(element):
    link = element.find('h4').find('a').get('href')
    if link[:4] != 'http':
        link = f'https://omeka.org/classic/{thingToUpdate}/{link}'
    return link

def valid_input(text, valid_inputs=['y','n']):
    user_input = 'invalid'
    while user_input not in valid_inputs:
        user_input = input(text)
    return user_input

entryInfo = {}
for e in entries:
    eInfo = {
        'name': e.find('h4').get_text(),
        'description': e.find(attrs={'class':'description'}).get_text(),
        'download_url': e.find('a', attrs={'class':'button'}).get('href'),
        'description_url': get_description_url(e),
        'version': e.find(attrs={'class':'version'}).get_text(),
        'updated': e.find(attrs={'class':'date'}).get_text(),
    }
    entryInfo[eInfo['name']] = eInfo

for key,e in entryInfo.items():
    e['version'] = e['version'].replace('Latest Version: ','')
    e['updated'] = e['updated'].replace('Updated: ', '')

with open(f'all_{thingToUpdate}_info.yml', 'r') as file:
    originalEntryInfo = yaml.load(file, Loader=yaml.FullLoader)

for key, info in entryInfo.items():
    if key not in originalEntryInfo:
        for k,v in info.items():
            print(k,v)
        info['available'] = True if valid_input('Make this addon available? (y/n) ') == 'y' else False
        notes = input('Add notes on this addon: ')
        info['notes'] = notes
        originalEntryInfo[key] = info
    else:
        for k,v in info.items():
            if originalEntryInfo[key][k] != v:
                print(f"{key}: Old value for {k}: {originalEntryInfo[key][k]}")
                print(f"{key}: New value for {k}: {v}")
                if valid_input('Replace old value with new value? (y/n) ') == 'y':
                    originalEntryInfo[key][k] = v
        # originalEntryInfo[key].update(info)

with open(f'all_{thingToUpdate}_info.yml', 'w') as file:
    documents = yaml.dump(originalEntryInfo, file)
