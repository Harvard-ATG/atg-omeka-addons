# Plugins

This document contains a list of plugins that we know about, whether we have them available or not. This is intended as a reference document, so that if someone asks for a plugin that we haven't made available, we have some idea of what would be required to enable it. If the plugin has been tested and doesn't have any obvious problems, the description may just be "Works".

## :x: Admin Images

Doesn't work with our S3 storage adapter, but rather built for local file storage. Also of questionable utility, since it allows for uploading unattached images that need to be used via shortcode, rather than the normal Omeka tooling.

## :white_check_mark: Annotator

Works, same functionality as "Text Annotation" plugin

## :x: Archive Repertory

Makes changes to how files are stored in ways that I don’t fully understand, breaks the item creation, duplicates items, and has an empty config page somehow

## :x: AvantRelationships

Part of a larger "Avant" suite of plugins, all of which are fairly involved plugins that I'm hesitant to add

## :white_check_mark: Block Party

[Jeremy](@jaxguillette) made this, so if it's broken it's his fault.

## :white_check_mark: Blog Shortcode

Works

## :white_check_mark: Bulk Metadata Editor

Works

## :white_check_mark: COinS

Default plugin on our instance

## :white_check_mark: CourseTools

Default plugin on our instance

## :white_check_mark: CSS Editor

Works

## :white_check_mark: CSV Export Format

Works, but failed on a large (641 item) collection in testing

## :white_check_mark: CSV Import

Works

## :x: Carta

Install fails because `geo_image_overlays` doesn't have a default value in database.

## :white_check_mark: Clean URL

Works on Imperiia and Beautiful Spaces sites. Not currently on form, but could be.

## :white_check_mark: Collection Tree

Works, but interacts weird with IIIF Toolkit. If Collections show sub-collection items, all item images are included in collection manifest in order. If not, only items directly in collection. IIIF Catalogue Tree maintains collection groups.

## :white_check_mark: Commenting

Doesn’t like being deactivated, causes errors but uninstall works

## :x: Contribution

Could well work, but isn’t something we should have available by default. It can stay in the cache, but shouldn’t be in the form. It allows for the site to accept contributions from the public, which there may be a good case for, but if someone wants that we should probably be in conversation with them

## :x: Contributor Contact

Requires “Contribution” and “Guest User”, relies on email which is broken and Contribution plugin which is a bad idea

## :x: Corrections

Fails to load correction page, wasn't able to locate the source of the error.

## :white_check_mark: Default Sort

Enabled on Beautiful Spaces and Imperiia, so it works, although it isn't one of the plugins currently on the form

## :x: Derivative Images

Not compatible with S3 storage adapter

## :x: Disqus Engage

Requires external account with Disqus, which manages all of the conversations, which could work if someone really wanted specifically disqus, but that isn't a platform we know or support.

## :white_check_mark: Docs Viewer

Works

## :white_check_mark: Dropbox

Default plugin on our instance

## :white_check_mark: Dublin Core Extended

Works

## :white_check_mark: Editorial

Works

## :white_check_mark: Elasticsearch

Default plugin on our instance

## :x: Element Types

Fails to install because database user does not have `REFERENCES` permission.

## :white_check_mark: ElementManager

No documentation to speak of, but seems to work if you can figure out how it works.

## :white_check_mark: Embed Codes

Works

## :white_check_mark: Exhibit Builder

Default plugin on our instance

## :white_check_mark: Exhibit Image Annotation

Works

## :x: Export

Not really an independent plugin, but rather a starting point and framework for a custom export plugin, so we don't need to offer it.

## :white_check_mark: Flickr Import

Single import seems to work, but I wasn't able to get a gallery import to work. Does require an API key from Flickr to work fully.

## :white_check_mark: Geolocation

Works

## :white_check_mark: Guest User

Works, required for several other plugins

## :white_check_mark: HarvardKey

Default plugin on our instance

## :white_check_mark: HTML5 Media

Works

## :x: Heist

From plugin description: “Heist is a plugin to help the interaction between tabletop displays at a GLAM and mobile devices. It is only important to institutions using OmekaEverywhere.” (we don't do that here)

## :white_check_mark: Hide Elements

Works

## :white_check_mark: History Log

Works

## :white_check_mark: IiifItems

Default plugin on our instance

## :white_check_mark: IiifItemEmbed

Default plugin on our instance

## :x: Import

Not really an independent plugin, but rather a starting point and framework for a custom import plugin, so we don't need to offer it.

## :x: Intense Debate

Requires a separate "Intense Debate" account, where the discussions are managed. Could work, but involving another platform seems imprudent unless a user specifically requests it.

## :x: Item Duplicate Check

Install fails because db user doesn't have `REFERENCES` permission

## :x: Item Neatline Display

Jeremy made it, so if it's broken, it's his fault. However, it was made specifically for something Kelly O'Neill wanted, so probably doesn't need to be generally avaialable.

## :white_check_mark: Item Order

Works

## :white_check_mark: Item Relations

Works

## :white_check_mark: Item Review

Email notifications won't work, but otherwise fine.

## :white_check_mark: LC Suggest

Works

## :x: Locale Switcher

Requires some code to be added to theme, which a user can't do, and which none of the existing themes do.

## :white_check_mark: METS Export

Works

## Maintenance

Works, just activates a maintenance mode when installed. Deactivate to remove.

## :white_check_mark: Neatline

Default plugin on our instance

## :white_check_mark: NeatlineFeatures

Currently installed on lagacy site eurasia.omeka.fas.harvard.edu. Listed as a default plugin, but not actually available.

## :white_check_mark: NeatlineSimile

Default plugin on our instance

## :white_check_mark: NeatlineText

Default plugin on our instance

## :white_check_mark: NeatlineTime

Default plugin on our instance

## :white_check_mark: NeatlineWaypoints

Default plugin on our instance

## :white_check_mark: Ngram

Works

## :white_check_mark: OAI-PMH Harvester

Works

## :white_check_mark: OAI-PMH Repository

Works

## :white_check_mark: OmekaApiImport

Default plugin on our instance

## :white_check_mark: PDF Embed

Works

## :x: PDF Text

Requires a `pdftotext` command line utility installed on the server.

## :white_check_mark: Posters

Requires "GuestUser" plugin, but seems to work fine.

## :x: Record Relations

Installs fine, but when used as a dependency for other plugins, it errors out, saying that "Column `timestamp` cannot be null". Could be related to [this github issue](https://github.com/omeka/plugin-RecordRelations/issues/2)

## :white_check_mark: Redact Elements

Works

## :x: Reports

Requires a folder on the server to be writable within files, not compatible with our storage adapter currently

## :x: Scripto

Requires a separate MediaWiki installation

## :white_check_mark: Search By Metadata

Works, recommended along with Simple Vocab

## :white_check_mark: Select2

Works

## :white_check_mark: Shortcode Carousel

Works

## :white_check_mark: Simple Vocab

Works

## :white_check_mark: Simple Vocab Plus

Works

## :x: SimpleContactForm

Error in `sendEmailNotification` function, Zend framework can’t send mail

## :white_check_mark: SimplePages

Default plugin on our instance

## :white_check_mark: Sitemap 2

Works

## :white_check_mark: Social Bookmarking

Works, can be blocked by browser addons

## :x: Taxonomy

Requires "Element Types", which fails to install.

## :x: Text Analysis

Errors on install

## :white_check_mark: Text Annotation

Works, same functionality as "Annotator" plugin

## :white_check_mark: Timeline Shortcode

Works, but I had a hard time figuring out how to make it work.

## :white_check_mark: UniversalViewer

Default plugin on our instance

## :x: User Profiles

Requires "Record Relations" plugin, but when using the dependency, it throws database errors.

## :white_check_mark: VRA Core

Works

## :white_check_mark: Vimeo Import

Requires an API token from Vimeo, but works.

## :x: YouTube Import

Requires a youtube api key, uses a default key where requests are easily exceeded. See https://github.com/UCSCLibrary/YouTubeImport/issues/34

## :white_check_mark: Zotero Import

Works