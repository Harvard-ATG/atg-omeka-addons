# Omeka plugin and theme cache

This repo contains a cache of up-to-date Omeka themes and plugins, as well as Python scripts to keep them up to date. There are two main tasks that this repo is built to support: adding a new addon manually, and pulling new addon info from omeka.org. The workflows are described in detail below, but the general process for each is as follows:

1. Adding or updating an addon manually
    1. Create a new branch on the repository.
    1. Edit the appropriate `all_*_info.yml` file with the new or updated addon information.
    1. If adding a plugin, run the `set_up_plugins_md.py` script.
    1. Run the `refresh_cache.py` script with either `plugins` or `themes` as appropriate.
    1. Commit the changes and make a pull request on this repo
1. Pulling in new addon info from omeka.org
    1. Create a new branch on the repository.
    1. Run the `update_info.py` script for `plugins` and `themes`.
    1. Respond to prompts from the script to update or add information to the addon info. Pay close attention to any changes in the source repository for a given addon, especially if the old configuration points to our own fork.
    1. Run `set_up_plugins_md.py` to update `plugins.md`.
    1. Run `refresh_cache.py` script for both `plugins` and `themes`.
    1. Commit the changes and make a pull request on this repo.

For both of these tasks, the `all_plugins_info.yml` or `all_themes_info.yml` file will be updated. These files are the source of truth for what addons we know about, which ones are available for install, where to download files from, and what folders they need to go into.

## Adding new addons

Copy the structure of an existing entry and fill out the appropriate information. The main key for each addon is its name, and those are sorted alphabetically. Beyond that, there are these parameters:
- `available`: boolean to indicate whether we should keep this in the cache or not. If any site needs to use this addon, set the flag true. If false, the addon will not be kept in the cache.
- `description`: A short description of what the addon does. For addons taken from the Omeka listings, this is taken from the short description on the plugin or theme listing page.
- `description_url`: A link to somewhere with more information about the addon, usually a page on omeka.org or the addon's GitHub repository.
- `folder_name`: What the folder containing this addon should be called. Particularly important for plugins, as the wrong folder name can cause the plugin to not work.
- `name`: The name of the addon
- `updated`: The last date on which this addon was updated.
- `version`: The version number associated with this addon.

After adding that configuration, run `python refresh_cache.py plugins|themes`, specifying either plugins or themes to update. If updating plugins, also run `set_up_plugins_md.py` to update the `plugins.md` file, which is just a human-friendly view of the plugins we support. 

After refreshing the cache, you can look over changes to this repo, make sure everything looks okay, and submit a PR to add the new addon.

The new addon will not be available to Omeka sites until the `ansible/vars_files/plugins.yml` file is updated to include the new plugin as an available option.

## Update addon info from omeka.org

Updating addon info involves pulling information from Omeka Classic's plugins and themes repositories. The `update_info.py` script scrapes these pages and updates the `all_plugins_info.yml` and `all_themes_info.yml` files with new addons and new links for existing addons. It doesn't assume that the list on Omeka is comprehensive, so it won't remove anything that it doesn't find on the omeka.org pages. This also preserves added notes and availability flags.

When running `update_info.py`, you will be prompted on updating values within the `info.yml` files. Pay close attention for changes to urls that would change the source of the addon, especially when the old value is a fork that we maintain. You will also be prompted to set an availability for any new addons that were not previously in the listing. If you are able to test the addon while running the script, do so and set the availability and notes appropriately. If you aren't able to test the plugin, just set it to not available and set the note to "pending review"

After running the `update_info.py` script for `plugins` and `themes`, run `refresh_cache.py` for both as well. Also run `set_up_plugins_md.py` if any changes were made to plugin info. Once those downstream changes have been made in the repository, commit the changes and submit a pull request.
