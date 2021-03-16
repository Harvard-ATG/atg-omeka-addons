#!/usr/bin/env python
# coding: utf-8

# In[1]:


import yaml
import os
import shutil
import requests
import zipfile

with open("plugins.yml", 'r') as fp:
    plugins = yaml.load(fp, Loader=yaml.FullLoader)

# nuke everything in the plugins dir
for thing in os.listdir('plugins'):
    shutil.rmtree(os.path.join('plugins', thing))
print('Old plugins removed')

def update_plugin(pluginName, pluginInfo):
    print(f'Downloading {pluginName}...')
    filename = pluginInfo['name'] + '.zip'
    R = requests.get(pluginInfo['url'])
    with open(filename, 'wb') as fp:
        fp.write(R.content)

    print(f'Unzipping {pluginName}...')
    with zipfile.ZipFile(filename,"r") as zip_ref:
        roots = []
        for name in zip_ref.namelist():
            pathList = name.split('/')
            if pathList[0] not in roots:
                roots.append(pathList[0])
        if len(roots) == 1:
            root_dir = roots[0]
        else:
            print(f'{pluginName} has multiple root directories/files, which is not the expected directory structure. This script probably needs to be updated.')
            return False
        zip_ref.extractall('.')
        os.rename(root_dir, os.path.join('plugins', pluginInfo['name']))

    print(f'Removing zip file for {pluginName}...')
    os.remove(filename)

    print(f'Update of {pluginName} complete!')
    
    return True

for pluginName, pluginInfo in plugins.items():
    update_plugin(pluginName, pluginInfo)

