#!/usr/bin/env python
# coding: utf-8

import yaml

with open(f'all_plugins_info.yml', 'r') as file:
    originalEntryInfo = yaml.load(file, Loader=yaml.FullLoader)

def make_markdown_entry(entry):
    if 'available' not in entry:
        symbol = ':question:'
    elif entry['available']:
        symbol = ':white_check_mark:'
    else:
        symbol = ':x:'
    md = f"""
## {symbol} {entry['name']}

* **Description:** {entry['description']}
* **[Description page]({entry['description_url'] if 'description_url' in entry else "#"})**
* **Version:** {entry['version']}
* **Updated:** {entry['updated']}

{entry['note'] if 'note' in entry else "Not yet evaluated"}
"""
    return md

output = """# Plugins

This document contains a list of plugins that we know about, whether we have them available or not. This is intended as a reference document, so that if someone asks for a plugin that we haven't made available, we have some idea of what would be required to enable it. If the plugin has been tested and doesn't have any obvious problems, the description may just be "Works".
"""

for key, entry in originalEntryInfo.items():
    output += make_markdown_entry(entry)

with open('plugins.md', 'w') as fp:
    fp.write(output)
