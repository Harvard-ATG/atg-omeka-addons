# Omeka plugin and theme cache

This repo contains a cache of up-to-date Omeka themes and plugins, as well as Python scripts to keep them up to date. There is a basic workflow for updating this cache with new addons and new versions of existing addons:

1. Update addon info
2. Validate new info
3. Update cache

## Update addon info

Updating addon info involves pulling information from Omeka Classic's plugins and themes repositories. The `update_info.py` script scrapes these pages and updates the `all_plugins_info.yml` and `all_themes_info.yml` files with new addons and new links for existing addons. It doesn't assume that the list on Omeka is comprehensive, so it won't remove anything that it doesn't find on the omeka.org pages. This also preserves added notes and availability flags.

Entries for addons in the `info.yml` files contain the following info:
- **available:** Boolean flag indicating whether or not this is an addon we should make available, added manually based on testing if a plugin works in our environment. Themes are assumed to work to display info, but the hvd-dh-omeka theme is the only one that has been tested for accessibility, and so is the only theme that should be used on public-facing Omeka sites.
- **description:** Description provided on omeka.org page, if added automatically, or manually added if not.
- **description_url:** Link to page describing addon linked from omeka.org page listing
- **download_url:** Url for addon zip file provided on omeka.org. This may not reflect the url we actually use if we use our own fork of an existing addon.
- **name:** The name of the addon
- **updated:** Date that the addon was last updated according to omeka.org
- **version:** Version number listed on omeka.org

## Validate changes

The `info.yml` files are maintained so that we have more information on what addons are out there, regardless of whether or not they are included in our Omeka installation. This information in maintained so that if a plugin requested on omeka.org is requested, we have something to consult to tell us if there was a reason that we don't offer it.

The cache is updated based on `plugins.yml` and `themes.yml`, so that contains the canonical information used to maintain the cache. To provide an easier way to update these based on the information collected in the last step, there is a notebook file: `validate_changed_addons.ipynb`. This goes through the `info.yml` file for plugins or themes, checks to see if the addon exists in the cache definition file, and prompts the user for a decision about whether to update a url and for a name to be used for the folder containing the addon.

To use the notebook, just open it in either [Jupyter Notebook](https://jupyter.org/install.html#getting-started-with-the-classic-jupyter-notebook) or [Jupyter Lab](https://jupyter.org/install.html#getting-started-with-jupyterlab) and run the cells in order, providing input when prompted. At the end of the notebook, the config file for the cache will be updated. While not necessary, it'll keep the commits cleaner if you restart the kernel and clear outputs before committing after running the notebook.

### Optional post-validation step

If there were new plugins found in getting info, and you added an `available` flag to the config in the last step, you should also run `update_plugins_md.py`, which will update the `plugins.md` file that contains info on why we have the plugin availability that we do in a human-friendly format.

## Update cache

The last step is to update the actual cache of plugins and themes by running `update_cache.py`.

To update the plugin cache, run `python update_cache.py plugins`

To update the theme cache, run `python update_cache.py themes`

Both scripts pull from their respective yml files, where you can point the plugin to an updated version or a self-maintained fork.