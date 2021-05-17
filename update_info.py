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
        originalEntryInfo[key] = info
    else:
        originalEntryInfo[key].update(info)

with open(f'all_{thingToUpdate}_info.yml', 'w') as file:
    documents = yaml.dump(originalEntryInfo, file)
