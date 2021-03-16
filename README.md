# Omeka plugin and theme cache

This repo contains a cache of up-to-date Omeka themes and plugins, as well as a Python script to update them.

To update the plugin cache, run `python update.py plugins`

To update the theme cache, run `python update.py themes`

Both scripts pull from their respective yml files, where you can point the plugin to an updated version or a self-maintained fork.