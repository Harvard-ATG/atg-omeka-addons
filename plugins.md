# Plugins

This document contains a list of plugins that we know about, whether we have them available or not. This is intended as a reference document, so that if someone asks for a plugin that we haven't made available, we have some idea of what would be required to enable it. If the plugin has been tested and doesn't have any obvious problems, the description may just be "Works".

## :x: Admin Images

* **Description:** Allows administrators to upload images not attached to Items for use in carousels and Simple Pages
* **[Description page](https://omeka.org/classic/plugins/AdminImages)**
* **Version:** 1.6
* **Updated:** August 03, 2022

Doesn't work with our S3 storage adapter, but rather built for local file storage. Also of questionable utility, since it allows for uploading unattached images that need to be used via shortcode, rather than the normal Omeka tooling.

## :x: Admin Tools

* **Description:** Various administrative tools, previously available in different minor plugins.
* **[Description page](https://omeka.org/classic/plugins/AdminTools)**
* **Version:** 1.6
* **Updated:** November 18, 2022

Not yet evaluated

## :white_check_mark: Annotator

* **Description:** Adds hypothes.is scripts to Omeka items and collections, allowing registered hypothes.is users to highlight and annotate text.
* **[Description page](https://omeka.org/classic/plugins/Annotator)**
* **Version:** 1.0.1
* **Updated:** November 01, 2017

Works, same functionality as "Text Annotation" plugin

## :x: Archive Repertory

* **Description:** Keeps original names of imported files and put them in a hierarchical structure (collection / item / files) in order to get readable urls for files and to avoid an overloading of the file server.
* **[Description page](https://omeka.org/classic/plugins/ArchiveRepertory)**
* **Version:** 2.15.8
* **Updated:** October 31, 2022

Makes changes to how files are stored in ways that I do not fully understand, breaks the item creation, duplicates items, and has an empty config page somehow

## :x: Archiviz

* **Description:** 
* **[Description page](https://omeka.org/classic/plugins/Archiviz)**
* **Version:** 1.0.0
* **Updated:** December 26, 2022

Not yet evaluated

## :x: AvantCommon

* **Description:** Provides common support for, and is required by, the AvantRelationships, AvantSearch, and AvantElements plugins. This plugin has no standalone features.
* **[Description page](https://omeka.org/classic/plugins/AvantCommon)**
* **Version:** 2.1.0
* **Updated:** September 25, 2018

Part of "Avant" family of plugins that make complex changes to how Omeka works

## :x: AvantRelationships

* **Description:** Adds functionality for creating and visually displaying real-word relationships.
* **[Description page](https://omeka.org/classic/plugins/AvantRelationships)**
* **Version:** 2.0.0
* **Updated:** August 31, 2018

Part of a larger "Avant" suite of plugins, all of which are fairly involved plugins that I'm hesitant to add

## :x: AvantSearch

* **Description:** Provides extended search results cababilites for the public interface.
* **[Description page](https://omeka.org/classic/plugins/AvantSearch)**
* **Version:** 2.1.0
* **Updated:** March 19, 2019

Part of "Avant" family of plugins that make complex changes to how Omeka works

## :x: Batch Uploader

* **Description:** Plugin for quickly uploading many files to Omeka.
* **[Description page](https://omeka.org/classic/plugins/BatchUpload)**
* **Version:** 1.1.0
* **Updated:** July 12, 2021

Errors on install, db user lacks REFERENCES permission

## :white_check_mark: Block Party

* **Description:** Adds new, useful Exhibit blocks, like groups of Items, Collections, or other Exhibits.
* **[Description page](https://omeka.org/classic/plugins/BlockParty)**
* **Version:** 1.0.1
* **Updated:** December 07, 2021

[Jeremy](https://github.com/jaguillette/) made this, so if it's broken it's his fault.

## :white_check_mark: Blog Shortcode

* **Description:** Allows users to display a list of simple pages in a blog-like format.
* **[Description page](https://omeka.org/classic/plugins/BlogShortcode)**
* **Version:** 1.0
* **Updated:** October 19, 2017

Works

## :x: Blogger

* **Description:** Consume and inject an RSS feed into an Omeka site.
* **[Description page](https://omeka.org/classic/plugins/Blogger)**
* **Version:** 1.1
* **Updated:** February 26, 2018

I was not able to get the plugin to do what it describes in the documentation, nor was I able to get any information from error logs

## :white_check_mark: Bulk Metadata Editor

* **Description:** Adds search and replace and other functionalities allowing curators to update metadata fields over many records quickly and easily.
* **[Description page](https://omeka.org/classic/plugins/BulkMetadataEditor)**
* **Version:** 2.8.1
* **Updated:** August 09, 2022

Works

## :white_check_mark: COinS

* **Description:** Adds COinS metadata to item pages, making them Zotero readable.
* **[Description page](https://omeka.org/classic/plugins/Coins)**
* **Version:** 2.1.1
* **Updated:** December 20, 2022

Default plugin on our instance

## :white_check_mark: CSS Editor

* **Description:** Add public CSS styles through the admin interface.
* **[Description page](https://omeka.org/classic/plugins/CSSEditor)**
* **Version:** 1.2
* **Updated:** November 18, 2022

Works

## :white_check_mark: CSV Export Format

* **Description:** Adds CSV as an item export format. Can optionally work with annotations and nested collections from IIIF Toolkit with Mirador.
* **[Description page](https://omeka.org/classic/plugins/CsvExport)**
* **Version:** 1.1.2
* **Updated:** July 05, 2021

Default plugin on our instance

## :white_check_mark: CSV Import

* **Description:** Imports items, tags, and files from CSV files.
* **[Description page](https://omeka.org/classic/plugins/CsvImport)**
* **Version:** 2.0.7
* **Updated:** December 21, 2022

Works

## :x: Carta

* **Description:** Leaflet maps in Omeka
* **[Description page](https://github.com/AcuGIS/Carta)**
* **Version:** N/A
* **Updated:** January 23, 2020

Removed from Omeka plugin collection, does not appear to be actively maintained

## :white_check_mark: Clean URL

* **Description:** Clean Url is a plugin for Omeka that creates clean, readable and search engine optimized URLs
* **[Description page](https://github.com/Daniel-KM/Omeka-plugin-CleanUrl)**
* **Version:** 2.16.1
* **Updated:** March 18, 2018

Works on Imperiia and Beautiful Spaces sites. Not currently on form, but could be.

## :x: Clickable Links Plus

* **Description:** Turns URLs in non-HTML text fields into clickable hyperlinks.
* **[Description page](https://omeka.org/classic/plugins/ClickableLinksPlus)**
* **Version:** 1.4
* **Updated:** July 21, 2022

Doesn't work, missing a required css file according to logged error message

## :white_check_mark: Collection Tree

* **Description:** Gives administrators the ability to create a hierarchical tree of their collections.
* **[Description page](https://omeka.org/classic/plugins/CollectionTree)**
* **Version:** 2.1
* **Updated:** January 13, 2017

Works, but interacts weird with IIIF Toolkit. If Collections show sub-collection items, all item images are included in collection manifest in order. If not, only items directly in collection. IIIF Catalogue Tree maintains collection groups.

## :x: Collections Plus

* **Description:** Improves the Collection browsing admin interface and allows for further customization of single Collections.
* **[Description page](https://omeka.org/classic/plugins/CollectionsPlus)**
* **Version:** 1.1
* **Updated:** February 12, 2023

Not yet evaluated

## :white_check_mark: Commenting

* **Description:** Allows commenting on Items, Collections, Exhibits, and more
* **[Description page](https://omeka.org/classic/plugins/Commenting)**
* **Version:** 2.4
* **Updated:** September 21, 2021

Doesn’t like being deactivated, causes errors but uninstall works

## :white_check_mark: Connected Carousel

* **Description:** Shortcode embeds code for creating linked carousels, one with thumbnails and one with full image. The thumbnail carousel can be used to navigate the full image carousel. You can also just have a carousel of full size images you can click through. Also contains code for embedding in Exhibits.
* **[Description page](https://omeka.org/classic/plugins/ConnectedCarousel)**
* **Version:** 2.2
* **Updated:** August 17, 2018

Works, albeit complicated

## :white_check_mark: Contribution

* **Description:** Allows collecting items from visitors
* **[Description page](https://omeka.org/classic/plugins/Contribution)**
* **Version:** 3.3
* **Updated:** September 21, 2021

Could well work, but isn’t something we should have available by default. It can stay in the cache, but shouldn’t be in the form. It allows for the site to accept contributions from the public, which there may be a good case for, but if someone wants that we should probably be in conversation with them

## :x: Contributor Contact

* **Description:** Supplies administrators with tools to contact contributors in bulk
* **[Description page](https://omeka.org/classic/plugins/ContributorContact)**
* **Version:** 1.1
* **Updated:** July 17, 2017

Requires “Contribution” and “Guest User”, relies on email which is broken and Contribution plugin which is a bad idea

## :x: Corrections

* **Description:** Adds simple user-supplied corrections to metadata.
* **[Description page](https://omeka.org/classic/plugins/Corrections)**
* **Version:** 1.0
* **Updated:** November 29, 2014

Fails to load correction page, wasn't able to locate the source of the error.

## :white_check_mark: Course Tools

* **Description:** Adds user roles useful for courses, including a student role with customizable permissions.
* **[Description page](https://omeka.org/classic/plugins/CourseTools)**
* **Version:** 1.2
* **Updated:** December 08, 2021

Default plugin on our instance

## :white_check_mark: Default Dublin Core

* **Description:** Omeka Plugin that allows administrators to specify default values for Dublin Core fields.  Dublin Core fields are then auto-filled with default values when records are created or edited.
* **[Description page](https://omeka.org/classic/plugins/DefaultDC)**
* **Version:** 1.0
* **Updated:** March 13, 2019

Does what it says on the tin

## :white_check_mark: Default Metadata

* **Description:** Omeka Plugin that allows administrators to specify default values for item metadata fields, including Dublin Core and Item Type Metadata fields. Metadata fields are then auto-filled with default values when items are created or edited.
* **[Description page](https://omeka.org/classic/plugins/DefaultMetadata)**
* **Version:** 3.0.1
* **Updated:** May 11, 2020

Does the same thing as DefaultDC but a bit more expansive

## :white_check_mark: Default Sort

* **Description:** This plugin can be used to change Omeka's default sorting, which is set to date added.
* **[Description page](https://github.com/anuragji/DefaultSort)**
* **Version:** N/A
* **Updated:** April 20, 2021

Enabled on Beautiful Spaces and Imperiia, so it works, although it isn't one of the plugins currently on the form

## :x: Derivative Images

* **Description:** Recreate (or create) derivative images.
* **[Description page](https://omeka.org/classic/plugins/DerivativeImages)**
* **Version:** 2.0
* **Updated:** May 27, 2014

Not compatible with S3 storage adapter

## :x: Disqus Engage

* **Description:** Embed Disqus comments on item and/or collection templates. Comments are moderated at disqus.com (account required).
* **[Description page](https://omeka.org/classic/plugins/DisqusEngage)**
* **Version:** 1.0.1
* **Updated:** September 03, 2021

Requires external account with Disqus, which manages all of the conversations, which could work if someone really wanted specifically disqus, but that isn't a platform we know or support.

## :white_check_mark: Docs Viewer

* **Description:** Embeds a Google document viewer into item show pages. PDF documents, PowerPoint presentations, TIFF files, and some Microsoft Word documents are supported.
* **[Description page](https://omeka.org/classic/plugins/DocsViewer)**
* **Version:** 2.2
* **Updated:** November 27, 2017

Works

## :white_check_mark: Dropbox

* **Description:** Allows users to upload files outside of Omeka and batch-add many files at once.
* **[Description page](https://omeka.org/classic/plugins/Dropbox)**
* **Version:** 0.7.2
* **Updated:** September 30, 2013

Default plugin on our instance

## :white_check_mark: Dublin Core Extended

* **Description:** Adds the full set of Dublin Core properties to the existing Dublin Core element set, including element refinements and supplemental elements. See DCMI Metadata Terms: http://dublincore.org/documents/dcmi-terms/
* **[Description page](https://omeka.org/classic/plugins/DublinCoreExtended)**
* **Version:** 2.3
* **Updated:** July 26, 2022

Works

## :x: E-mail Notification

* **Description:** Send e-mail notification when new Item or Collection or Exhibit is added.
* **[Description page](https://omeka.org/classic/plugins/EmailNotification)**
* **Version:** 1.4
* **Updated:** November 13, 2021

Not yet evaluated

## :x: E-mail Users

* **Description:** Allows to contact users via e-mail
* **[Description page](https://omeka.org/classic/plugins/EmailUsers)**
* **Version:** 1.2
* **Updated:** September 15, 2021

Not yet evaluated

## :white_check_mark: Editorial

* **Description:** Allows editorial feedback when building exhibits
* **[Description page](https://omeka.org/classic/plugins/Editorial)**
* **Version:** 1.2
* **Updated:** September 21, 2021

Works

## :white_check_mark: Eileen Southern

* **Description:** plugin for Eileen Southern site
* **[Description page](https://github.com/artshumrc/plugin-southern)**
* **Version:** 0.1
* **Updated:** July 22, 2021

maintained by Cole Crawford

## :white_check_mark: Elasticsearch

* **Description:** Integrate Elasticsearch into Omeka for searching.
* **[Description page](https://omeka.org/classic/plugins/Elasticsearch)**
* **Version:** 1.2.0
* **Updated:** May 19, 2022

Works

## :x: Element Types

* **Description:** Allow elements to have a type, thus allowing easier input. For instance, this plugin implements the 'date' type and show a datepicker widget for elements of this type. Other types can be implemented by plugins.
* **[Description page](https://omeka.org/classic/plugins/ElementTypes)**
* **Version:** 0.5.0
* **Updated:** October 31, 2017

Fails to install because database user does not have `REFERENCES` permission.

## :white_check_mark: ElementManager

* **Description:** Delete or rename existing elements
* **[Description page](https://omeka.org/classic/plugins/ElementManager)**
* **Version:** 0.1
* **Updated:** October 31, 2017

No documentation to speak of, but seems to work if you can figure out how it works.

## :x: Email Notification

* **Description:** Send e-mail notification when new Item or Collection or Exhibit is added.
* **[Description page](https://omeka.org/classic/plugins/EmailNotification)**
* **Version:** 1.3
* **Updated:** April 10, 2020

Errors on item creation because it fails to send mail

## :white_check_mark: Embed Codes

* **Description:** Allows embedding item content as an iframe in other sites
* **[Description page](https://omeka.org/classic/plugins/EmbedCodes)**
* **Version:** 1.0
* **Updated:** June 19, 2013

Works

## :white_check_mark: Exhibit Builder

* **Description:** Build rich exhibits using Omeka.
* **[Description page](https://omeka.org/classic/plugins/ExhibitBuilder)**
* **Version:** 3.6.1
* **Updated:** January 23, 2023

Default plugin on our instance

## :white_check_mark: Exhibit Image Annotation

* **Description:** Annotate images in your exhibits.
* **[Description page](https://omeka.org/classic/plugins/ExhibitImageAnnotation)**
* **Version:** 1.2
* **Updated:** September 21, 2021

Works

## :x: Export

* **Description:** Extensible export plugin
* **[Description page](https://omeka.org/classic/plugins/Export)**
* **Version:** 0.2.0
* **Updated:** March 16, 2023

Not really an independent plugin, but rather a starting point and framework for a custom export plugin, so we don't need to offer it.

## :x: Facets

* **Description:** Adds a faceted navigation block to narrow down Items and Collections search results by applying multiple filters
* **[Description page](https://omeka.org/classic/plugins/Facets)**
* **Version:** 2.9
* **Updated:** August 04, 2022

Not yet evaluated

## :x: File Paginator

* **Description:** Allow users to page through files on an item page.
* **[Description page](https://omeka.org/classic/plugins/FilePaginator)**
* **Version:** 1.0
* **Updated:** January 30, 2020

Can't determine purpose, no available documentation

## :white_check_mark: Flickr Import

* **Description:** Adds the ability to import Flickr photosets and galleries into Omeka as items or collections, while preserving as much metadata as possible
* **[Description page](https://omeka.org/classic/plugins/FlickrImport)**
* **Version:** 1.3
* **Updated:** July 17, 2017

Single import seems to work, but I wasn't able to get a gallery import to work. Does require an API key from Flickr to work fully.

## :white_check_mark: GDriveLinks Plugin

* **Description:** Uses the URL Item Type Metadata field to create links to Google Drive documents and/or embeds Google Drive documents within Omeka item views.
* **[Description page](https://omeka.org/classic/plugins/GDriveLinks)**
* **Version:** 1.0.0
* **Updated:** February 24, 2020

Only works for files uploaded to Google Drive, and requires some manual editing of a url for different behavior, but it does work

## :white_check_mark: Geolocation

* **Description:** Adds location info and maps to Omeka
* **[Description page](https://omeka.org/classic/plugins/Geolocation)**
* **Version:** 3.2.3
* **Updated:** December 21, 2022

works

## :white_check_mark: Guest User

* **Description:** Adds a guest user role. Can't access backend, but allows plugins to use an authenticated user
* **[Description page](https://omeka.org/classic/plugins/GuestUser)**
* **Version:** 1.2
* **Updated:** September 21, 2021

Works, required for several other plugins

## :white_check_mark: HTML5 Media

* **Description:** Enables HTML5 for media files using MediaElement.js.
* **[Description page](https://omeka.org/classic/plugins/Html5Media)**
* **Version:** 2.8.1
* **Updated:** June 13, 2020

Works

## :white_check_mark: HarvardKey

* **Description:** Integrates HarvardKey SSO in Omeka
* **[Description page](https://github.com/Harvard-ATG/omeka-plugin-HarvardKey)**
* **Version:** 1.0.1
* **Updated:** March 8, 2019

Default plugin on our instance

## :x: Heist

* **Description:** Facilitates interaction between tables and mobile devices for OmekaEverywhere
* **[Description page](https://omeka.org/classic/plugins/Heist)**
* **Version:** 1.1
* **Updated:** May 19, 2017

From plugin description: “Heist is a plugin to help the interaction between tabletop displays at a GLAM and mobile devices. It is only important to institutions using OmekaEverywhere.” (we don't do that here)

## :white_check_mark: Hide Elements

* **Description:** Hide admin-specified metadata elements.
* **[Description page](https://omeka.org/classic/plugins/HideElements)**
* **Version:** 1.3
* **Updated:** June 21, 2014

Works

## :white_check_mark: History Log

* **Description:** Creates a log of basic curatorial events for each item, collection and file, including ingress, updates, and pushes, and compute statistics on evolution.
* **[Description page](https://omeka.org/classic/plugins/HistoryLog)**
* **Version:** 2.10
* **Updated:** November 28, 2017

Works

## :white_check_mark: Honor Thy Librarians

* **Description:** Gives credit to people who have added or edited Items
* **[Description page](https://omeka.org/classic/plugins/HonorThyLibrarians)**
* **Version:** 1.3
* **Updated:** October 22, 2021

Works as advertised

## :white_check_mark: IIIF Toolkit

* **Description:** Embeds Mirador with a built-in annotator, a manifest generator and importer, Simple Pages shortcodes and Exhibit Builder blocks for a rich IIIF-compliant presentation experience.
* **[Description page](https://omeka.org/classic/plugins/IiifItems)**
* **Version:** 1.1.0
* **Updated:** March 15, 2018

Default plugin on our instance, but we use a custom fork

## :white_check_mark: IIIF Toolkit Embed

* **Description:** Adds a customizable, embeddable Mirador viewer page to show content from IIIF Toolkit on other sites
* **[Description page](https://omeka.org/classic/plugins/IiifItemEmbed)**
* **Version:** 0.1
* **Updated:** November 16, 2021

Not yet evaluated

## :x: Import

* **Description:** Extensible import plugin
* **[Description page](https://omeka.org/classic/plugins/Import)**
* **Version:** 0.2.0
* **Updated:** October 31, 2017

Not really an independent plugin, but rather a starting point and framework for a custom import plugin, so we don't need to offer it.

## :x: Intense Debate

* **Description:** Embed Intense Debate comments on item and/or collection templates. Comments are moderated at intensedebate.com (account required).
* **[Description page](https://omeka.org/classic/plugins/IntenseDebate)**
* **Version:** 1.0.2
* **Updated:** September 03, 2021

Requires a separate "Intense Debate" account, where the discussions are managed. Could work, but involving another platform seems imprudent unless a user specifically requests it.

## :x: Item Duplicate Check

* **Description:** Check for duplicates before saving item
* **[Description page](https://omeka.org/classic/plugins/ItemDuplicateCheck)**
* **Version:** 0.2.0
* **Updated:** October 31, 2017

Install fails because db user doesn't have `REFERENCES` permission

## :white_check_mark: Item Duplicator

* **Description:** Allows duplicating items
* **[Description page](https://omeka.org/classic/plugins/ItemDuplicator)**
* **Version:** 1.4
* **Updated:** May 15, 2022

Duplicates items, not exactly sure what's happening with IIIF annotations, as initial test suggests they might be associated with both the original and the duplicate?

## :white_check_mark: Item Neatline Display

* **Description:** adds Neatline view of an exhibit to item
* **[Description page](https://github.com/jaguillette/omeka_itemNeatlineDisplay)**
* **Version:** 0.1
* **Updated:** June 7, 2016

Jeremy made it, so if it's broken, it's his fault. However, it was made specifically for something Kelly O'Neill wanted, so probably doesn't need to be generally avaialable.

## :white_check_mark: Item Order

* **Description:** Gives administrators the ability to custom order items in collections.
* **[Description page](https://omeka.org/classic/plugins/ItemOrder)**
* **Version:** 2.1
* **Updated:** June 28, 2022

Works

## :white_check_mark: Item Relations

* **Description:** Allows administrators to define relations between items.
* **[Description page](https://omeka.org/classic/plugins/ItemRelations)**
* **Version:** 2.2.1
* **Updated:** September 21, 2021

Works

## :white_check_mark: Item Review

* **Description:** Adds the ability to mark all item created by certain user roles for administrative review before publication.
* **[Description page](https://omeka.org/classic/plugins/ItemReview)**
* **Version:** 1.1
* **Updated:** August 01, 2017

Email notifications won't work, but otherwise fine.

## :x: Job Diagnostics

* **Description:** View running jobs and diagnose problems with the job dispatcher.
* **[Description page](https://omeka.org/classic/plugins/JobDiagnostics)**
* **Version:** 1.0.0
* **Updated:** April 05, 2018

Not the kind of thing most people need, and the results are similar to this (which ran in less than 51 years) - Latest result (Jun 2, 2021): Response in 1622665923 seconds. Queue nearing capacity, or re-test required. 

## :white_check_mark: LC Suggest

* **Description:** Enable an autosuggest feature for Omeka elements using the Library of Congress Authorities and Vocabularies service: http://id.loc.gov
* **[Description page](https://omeka.org/classic/plugins/LcSuggest)**
* **Version:** 2.0.4
* **Updated:** September 21, 2021

Works

## :x: Limit visibility to own

* **Description:** Shows only items and collections contributed by the user
* **[Description page](https://omeka.org/classic/plugins/LimitVisibilityToOwn)**
* **Version:** 1.2
* **Updated:** May 04, 2021

Redundant with course tools plugin, which is more flexible, and this introduces an issue where the first item someone makes can only be created from the dashboard, as the items page lacks an add item button until it has an item to show for limited users with this plugin enabled.

## :x: Locale Switcher

* **Description:** Provides a language switcher view helper to be used in themes
* **[Description page](https://omeka.org/classic/plugins/LocaleSwitcher)**
* **Version:** 0.2.1
* **Updated:** August 28, 2017

Requires some code to be added to theme, which a user can't do, and which none of the existing themes do.

## :white_check_mark: METS Export

* **Description:** Adds functionality to export Omeka items as METS xml files, either at the item or the collection level
* **[Description page](https://omeka.org/classic/plugins/MetsExport)**
* **Version:** 1.3
* **Updated:** November 28, 2017

Works

## :white_check_mark: Maintenance

* **Description:** Put Omeka site in maintenance mode
* **[Description page](https://omeka.org/classic/plugins/Maintenance)**
* **Version:** 0.1.0
* **Updated:** December 12, 2016

Works, just activates a maintenance mode when installed. Deactivate to remove.

## :x: MapsAlive

* **Description:** Provides MapsAlive Live Data access to Omeka items
* **[Description page](https://omeka.org/classic/plugins/MapsAlive)**
* **Version:** 1.0.0
* **Updated:** April 27, 2022

Not yet evaluated

## :x: More Media Types

* **Description:** Adds new media types and relative fallback images; can replace default fallback images as well.
* **[Description page](https://omeka.org/classic/plugins/MoreMediaTypes)**
* **Version:** 1.4
* **Updated:** October 31, 2022

Not yet evaluated

## :white_check_mark: Neatline

* **Description:** Plot your course in space and time.
* **[Description page](https://omeka.org/classic/plugins/Neatline)**
* **Version:** 2.6.4
* **Updated:** May 19, 2021

Default plugin on our instance

## :white_check_mark: Neatline Time

* **Description:** Create timelines in Omeka.
* **[Description page](https://omeka.org/classic/plugins/NeatlineTime)**
* **Version:** 2.1.2
* **Updated:** July 29, 2020

Default plugin on our instance

## :white_check_mark: Neatline Widget ~ SIMILE Timeline

* **Description:** Add SIMILE Timeline to Neatline exhibits.
* **[Description page](https://omeka.org/classic/plugins/NeatlineSimile)**
* **Version:** 2.0.4
* **Updated:** July 13, 2015

Default plugin on our instance

## :white_check_mark: Neatline Widget ~ Text

* **Description:** Connect text documents to Neatline exibits.
* **[Description page](https://omeka.org/classic/plugins/NeatlineText)**
* **Version:** 1.1.0
* **Updated:** May 07, 2015

Default plugin on our instance

## :white_check_mark: Neatline Widget ~ Waypoints

* **Description:** Adds a list of waypoints to Neatline exhibits.
* **[Description page](https://omeka.org/classic/plugins/NeatlineWaypoints)**
* **Version:** 2.0.2
* **Updated:** January 15, 2014

Default plugin on our instance

## :white_check_mark: NeatlineFeatures

* **Description:** Allows administrators to draw things on maps and associate them with an Omeka item.
* **[Description page](https://omeka.org/classic/plugins/NeatlineFeatures)**
* **Version:** 2.0.5
* **Updated:** August 12, 2014

Currently installed on lagacy site eurasia.omeka.fas.harvard.edu. Listed as a default plugin, but not actually available.

## :white_check_mark: Ngram

* **Description:** Generate ngram graphs from your collections
* **[Description page](https://omeka.org/classic/plugins/Ngram)**
* **Version:** 1.2
* **Updated:** May 30, 2017

Works

## :white_check_mark: OAI-PMH Harvester

* **Description:** Harvests metadata from OAI-PMH data providers.
* **[Description page](https://omeka.org/classic/plugins/OaipmhHarvester)**
* **Version:** 2.0.3
* **Updated:** September 21, 2021

Works

## :white_check_mark: OAI-PMH Repository

* **Description:** Exposes Omeka items as an OAI-PMH repository.
* **[Description page](https://omeka.org/classic/plugins/OaiPmhRepository)**
* **Version:** 2.2
* **Updated:** February 20, 2019

Works

## :white_check_mark: Omeka Api Import

* **Description:** Import data from other Omeka 2.1 or higher sites using the API
* **[Description page](https://omeka.org/classic/plugins/OmekaApiImport)**
* **Version:** 1.1.2
* **Updated:** February 10, 2017

Default plugin on our instance

## :x: Omeka Devel

* **Description:** This plugin adds Kint debugging functionality to your site.
* **[Description page](https://omeka.org/classic/plugins/OmekaDevel)**
* **Version:** 1.1
* **Updated:** May 06, 2022

Not yet evaluated

## :white_check_mark: Omeka Footnotes JS

* **Description:** A plugin to add bigfoot.js footnote functionality to the WYSIWYG on simple or exhibit pages.
* **[Description page](https://omeka.org/classic/plugins/OmekaFootnotesJS)**
* **Version:** 1.1
* **Updated:** March 04, 2021

Works as advertised

## :white_check_mark: PBCore 2

* **Description:** Adds elements for describing resources with the PBCore metadata standard
* **[Description page](https://omeka.org/classic/plugins/PBCore2)**
* **Version:** 1.0.0
* **Updated:** October 14, 2019

Does what it says, although it does make this metadata standard the default instead of DC

## :white_check_mark: PDF Embed

* **Description:** Embeds PDF documents into item and file pages.
* **[Description page](https://omeka.org/classic/plugins/PdfEmbed)**
* **Version:** 1.0.1
* **Updated:** December 08, 2017

Works

## :x: PDF Text

* **Description:** Extracts text from PDF files so they can be browsed and searched.
* **[Description page](https://omeka.org/classic/plugins/PdfText)**
* **Version:** 1.3.1
* **Updated:** April 18, 2022

Requires a `pdftotext` command line utility installed on the server.

## :white_check_mark: Podcast Feed

* **Description:** Adds a custom podcast feed and a new Podcast Episode item type.
* **[Description page](https://omeka.org/classic/plugins/PodcastFeed)**
* **Version:** 1.0
* **Updated:** November 08, 2018

It does actually work, although in my test I only created and used the RSS feed. I didn't try submitting it to Google or Apple for broader avaialbility. There also seems to be some issue with episode descriptions not appearing in Pocket Casts, where I tested it, but I don't know why.

## :white_check_mark: Posters

* **Description:** Create interpretive posters using Omeka items.
* **[Description page](https://omeka.org/classic/plugins/Posters)**
* **Version:** 1.1
* **Updated:** February 14, 2018

Requires "GuestUser" plugin, but seems to work fine.

## :white_check_mark: Project Guide

* **Description:** Omeka Plugin which allows administrators to configure a link to a custom project guide.  The link displays at the admin item view level and on the admin dashboard.
* **[Description page](https://omeka.org/classic/plugins/ProjectGuide)**
* **Version:** 1.0
* **Updated:** February 18, 2019

Does what it says, although it only adds a link to some very specific pages.

## :white_check_mark: Public Edit Link

* **Description:** Adds link to public UI to edit current Item/Collection/File when logged in.
* **[Description page](https://omeka.org/classic/plugins/PublicEditLink)**
* **Version:** 1.1.0
* **Updated:** April 01, 2021

Only works for items, collections, and files, but pretty handy nonetheless.

## :white_check_mark: Reassign Files

* **Description:** Reassignes files from one Item to another.
* **[Description page](https://omeka.org/classic/plugins/ReassignFiles)**
* **Version:** 1.1
* **Updated:** April 20, 2021

Works as advertised. Ability to remove empty items was not tested

## :x: Record Relations

* **Description:** Facilitates plugins creating relations across record types
* **[Description page](https://omeka.org/classic/plugins/RecordRelations)**
* **Version:** 2.0.1
* **Updated:** May 23, 2016

Installs fine, but when used as a dependency for other plugins, it errors out, saying that "Column `timestamp` cannot be null". Could be related to [this github issue](https://github.com/omeka/plugin-RecordRelations/issues/2)

## :white_check_mark: Redact Elements

* **Description:** Redact admin-specified metadata elements.
* **[Description page](https://omeka.org/classic/plugins/RedactElements)**
* **Version:** 1.0
* **Updated:** February 20, 2014

Works

## :x: Related Content

* **Description:** Suggests Items related to the one currently shown
* **[Description page](https://omeka.org/classic/plugins/RelatedContent)**
* **Version:** 2.0
* **Updated:** July 27, 2021

Not yet evaluated

## :x: Reports

* **Description:** Generates item reports in HTML and QR Codes of items in PDFs.
* **[Description page](https://omeka.org/classic/plugins/Reports)**
* **Version:** 2.0.3
* **Updated:** September 21, 2021

Requires a folder on the server to be writable within files, not compatible with our storage adapter currently

## :x: Resource Meta

* **Description:** Add meta tags to resources
* **[Description page](https://omeka.org/classic/plugins/ResourceMeta)**
* **Version:** 1.0.0
* **Updated:** May 03, 2023

Not yet evaluated

## :x: Scripto

* **Description:** Adds the ability to transcribe items using the Scripto library.
* **[Description page](https://omeka.org/classic/plugins/Scripto)**
* **Version:** 2.5
* **Updated:** November 23, 2021

Requires a separate MediaWiki installation

## :white_check_mark: Search By Metadata

* **Description:** Allows administrators to configure metadata fields to link to items with same field value
* **[Description page](https://omeka.org/classic/plugins/SearchByMetadata)**
* **Version:** 1.2.1
* **Updated:** November 02, 2015

Works, recommended along with Simple Vocab

## :white_check_mark: Select2

* **Description:** Apply Select2 JS library to existing dropdown lists
* **[Description page](https://omeka.org/classic/plugins/Select2)**
* **Version:** 0.3
* **Updated:** September 30, 2015

Works

## :x: Shortcode Anyfile

* **Description:** Adds a shortcode to insert a file
* **[Description page](https://omeka.org/classic/plugins/ShortcodeAnyfile)**
* **Version:** 1.0.1
* **Updated:** August 04, 2018

Files fail to load, breaking the page where they are used.

## :white_check_mark: Shortcode Carousel

* **Description:** Adds a shortcode to insert a carousel item viewer
* **[Description page](https://omeka.org/classic/plugins/ShortcodeCarousel)**
* **Version:** 1.0.1
* **Updated:** June 07, 2016

Works

## :x: Simple Contact Form

* **Description:** Adds a simple contact form for users to contact the administrator.
* **[Description page](https://omeka.org/classic/plugins/SimpleContactForm)**
* **Version:** 1.1.1
* **Updated:** September 21, 2021

Not yet evaluated

## :white_check_mark: Simple Pages

* **Description:** Allows administrators to create simple web pages for their public site.
* **[Description page](https://omeka.org/classic/plugins/SimplePages)**
* **Version:** 3.2.1
* **Updated:** March 01, 2022

Default plugin on our instance

## :white_check_mark: Simple Vocab

* **Description:** A simple way to create controlled vocabularies.
* **[Description page](https://omeka.org/classic/plugins/SimpleVocab)**
* **Version:** 2.2.3
* **Updated:** September 22, 2021

Works

## :white_check_mark: Simple Vocab Plus

* **Description:** Allows administrators to create, edit and update controlled vocabularies, either defined in the repository or in the cloud
* **[Description page](https://omeka.org/classic/plugins/SimpleVocabPlus)**
* **Version:** 3.1.2
* **Updated:** August 20, 2022

Works

## :x: SimpleContactForm

* **Description:** Adds a simple contact form for users to contact the administrator.
* **[Description page](https://omeka.org/classic/plugins/SimpleContactForm)**
* **Version:** 0.6
* **Updated:** February 14, 2018

Error in `sendEmailNotification` function, Zend framework can’t send mail

## :x: Site Message

* **Description:** Omeka Plugin which allows administrators to configure content and public display for a custom message for users.  This could be used for a number of reasons including; Harmful Language Statement, Message Concerning Scheduled Downtime for Maintenance, etc.
* **[Description page](https://omeka.org/classic/plugins/SiteMessage)**
* **Version:** 1.0
* **Updated:** October 15, 2021

Not yet evaluated

## :white_check_mark: Sitemap 2

* **Description:** This Omeka 2.0+ plugin provides a persistent url for a dynamically generated XML Sitemap, for SEO purposes.
* **[Description page](https://omeka.org/classic/plugins/Sitemap)**
* **Version:** 2.3
* **Updated:** July 17, 2017

Works

## :white_check_mark: Social Bookmarking

* **Description:** Insert a customizable list of social bookmarking links.
* **[Description page](https://omeka.org/classic/plugins/SocialBookmarking)**
* **Version:** 2.1.1
* **Updated:** June 14, 2023

Works, can be blocked by browser addons

## :x: Taxonomy

* **Description:** Allow to define taxonomies and declare an element type 'taxonomy-term'
* **[Description page](https://omeka.org/classic/plugins/Taxonomy)**
* **Version:** 0.3.0
* **Updated:** October 31, 2017

Requires "Element Types", which fails to install

## :x: Text Analysis

* **Description:** Analyze your corpora using text analysis services. (Create corpora using the Ngram plugin.)
* **[Description page](https://omeka.org/classic/plugins/TextAnalysis)**
* **Version:** 2.5
* **Updated:** July 06, 2017

Errors on install

## :white_check_mark: Text Annotation

* **Description:** Allows for annotation of text content on a page using the Hypothes.is webservice.
* **[Description page](https://omeka.org/classic/plugins/TextAnnotation)**
* **Version:** 1.0
* **Updated:** November 14, 2017

Works, same functionality as "Annotator" plugin

## :x: Timeline

* **Description:** Adds a TimelineJS block to ExhibitBuilder
* **[Description page](https://omeka.org/classic/plugins/Timeline)**
* **Version:** 1.0
* **Updated:** February 23, 2023

Not yet evaluated

## :white_check_mark: Timeline Shortcode

* **Description:** An Omeka plugin that adds a shortcode for displaying a list of items sorted by date.
* **[Description page](https://omeka.org/classic/plugins/TimelineShortcode)**
* **Version:** 1.0
* **Updated:** October 19, 2017

Works, but I had a hard time figuring out how to make it work

## :white_check_mark: UniversalViewer

* **Description:** Integrates the IIIF specifications, a simple IIP Image Server and the Universal Viewer in order to create carousels of virtual books from image files and to display any media file (pdf, audio, video, 3D…) in a unified player.
* **[Description page](https://omeka.org/classic/plugins/UniversalViewer)**
* **Version:** 2.6.0-beta.2
* **Updated:** June 01, 2020

Default plugin on our instance

## :x: User Profiles

* **Description:** Adds configurable user profiles
* **[Description page](https://omeka.org/classic/plugins/UserProfiles)**
* **Version:** 1.3
* **Updated:** September 21, 2021

Requires "Record Relations" plugin, but when using the dependency, it throws database errors.

## :white_check_mark: VRA Core

* **Description:** Adds VRA Core Elements to Item, Collection, and File metadata.
* **[Description page](https://omeka.org/classic/plugins/VraCore)**
* **Version:** 1.2
* **Updated:** August 15, 2016

Works

## :white_check_mark: Vimeo Import

* **Description:** Adds the ability to import Vimeo videos into Omeka as items while preserving as much metadata as possible
* **[Description page](https://omeka.org/classic/plugins/VimeoImport)**
* **Version:** 1.3
* **Updated:** July 17, 2017

requires an API token from Vimeo, but works.

## :x: Wikipedia Citations

* **Description:** Formats citations according to Wikipedia guidelines
* **[Description page](https://omeka.org/classic/plugins/WikipediaCitations)**
* **Version:** 1.1
* **Updated:** August 10, 2022

Not yet evaluated

## :white_check_mark: YouTube Import

* **Description:** Adds the ability to import Youtube videos into Omeka as items while preserving as much metadata as possible
* **[Description page](https://omeka.org/classic/plugins/YouTubeImport)**
* **Version:** 1.3
* **Updated:** July 17, 2017

Requires a youtube api key, uses a default key where requests are easily exceeded. See https://github.com/UCSCLibrary/YouTubeImport/issues/34

## :white_check_mark: Zotero Import

* **Description:** Imports libraries and collections from Zotero user and group accounts.
* **[Description page](https://omeka.org/classic/plugins/ZoteroImport)**
* **Version:** 2.2
* **Updated:** October 07, 2019

works
