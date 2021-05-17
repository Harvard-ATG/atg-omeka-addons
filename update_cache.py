#!/usr/bin/env python
# coding: utf-8

import yaml
import os
import shutil
import requests
import zipfile
import sys

try:
    thingToUpdate = sys.argv[1]
except IndexError:
    print('Usage: python update_cache.py [plugins|themes]')
    exit()

if thingToUpdate not in ['plugins', 'themes']:
    print('Must specify "plugins" or "themes" exactly')
    exit()

with open(f"{thingToUpdate}.yml", 'r') as fp:
    addons = yaml.load(fp, Loader=yaml.FullLoader)

# nuke everything in the plugins dir
for thing in os.listdir(thingToUpdate):
    shutil.rmtree(os.path.join(thingToUpdate, thing))
print(f'Old {thingToUpdate} removed')

def update_addon(addonName, addonInfo):
    print(f'Downloading {addonName}...')
    filename = addonInfo['name'] + '.zip'
    R = requests.get(addonInfo['url'])
    with open(filename, 'wb') as fp:
        fp.write(R.content)

    print(f'Unzipping {addonName}...')
    with zipfile.ZipFile(filename,"r") as zip_ref:
        roots = []
        for name in zip_ref.namelist():
            pathList = name.split('/')
            if pathList[0] not in roots:
                roots.append(pathList[0])
        if len(roots) == 1:
            root_dir = roots[0]
        else:
            print(f'{addonName} has multiple root directories/files, which is not the expected directory structure. This script probably needs to be updated.')
            print(f'The directories are:\n{chr(10).join(roots)}')
            return False
        zip_ref.extractall('.')
        os.rename(root_dir, os.path.join(thingToUpdate, addonInfo['name']))

    print(f'Removing zip file for {addonName}...')
    os.remove(filename)

    print(f'Update of {addonName} complete!')
    
    return True

for addonName, addonInfo in addons.items():
    update_addon(addonName, addonInfo)

