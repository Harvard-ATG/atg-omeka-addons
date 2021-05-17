# Plugins

This document contains a list of plugins that we know about, whether we have them available or not. This is intended as a reference document, so that if someone asks for a plugin that we haven't made available, we have some idea of what would be required to enable it. If the plugin has been tested and doesn't have any obvious problems, the description may just be "Works".

## :x: Admin Images

* **Description:** This Omeka 2.0+ plugin allows administrators to upload images not attached to items for use in carousels and simple pages
* **[Description page](https://omeka.org/classic/plugins/AdminImages)**
* **Version:** 1.3
* **Updated:** July 17, 2017

Doesn't work with our S3 storage adapter, but rather built for local file storage. Also of questionable utility, since it allows for uploading unattached images that need to be used via shortcode, rather than the normal Omeka tooling.

## :white_check_mark: Annotator

* **Description:** Adds hypothes.is scripts to Omeka items and collections, allowing registered hypothes.is users to highlight and annotate text.
* **[Description page](https://omeka.org/classic/plugins/Annotator)**
* **Version:** 1.0.1
* **Updated:** November 01, 2017

Works, same functionality as "Text Annotation" plugin

## :x: Archive Repertory

* **Description:** Keeps original names of imported files and put them in a hierarchical structure (collection / item / files) in order to get readable urls for files and to avoid an overloading of the file server.
* **[Description page](https://omeka.org/classic/plugins/ArchiveRepertory)**
* **Version:** 2.15.7
* **Updated:** November 10, 2019

Makes changes to how files are stored in ways that I do not fully understand, breaks the item creation, duplicates items, and has an empty config page somehow

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

## :question: Batch Uploader

* **Description:** Plugin for quickly uploading many files to Omeka.
* **[Description page](https://omeka.org/classic/plugins/BatchUpload)**
* **Version:** 1.0.0
* **Updated:** April 02, 2018

Not yet evaluated

## :white_check_mark: Block Party

* **Description:** A collection of useful block types for exhibits in Omeka.
* **[Description page](#)**
* **Version:** 1.0
* **Updated:** April 26, 2021

[Jeremy](https://github.com/jaguillette/) made this, so if it's broken it's his fault.

## :white_check_mark: Blog Shortcode

* **Description:** Allows users to display a list of simple pages in a blog-like format.
* **[Description page](https://omeka.org/classic/plugins/BlogShortcode)**
* **Version:** 1.0
* **Updated:** October 19, 2017

Works

## :question: Blogger

* **Description:** Consume and inject an RSS feed into an Omeka site.
* **[Description page](https://omeka.org/classic/plugins/Blogger)**
* **Version:** 1.1
* **Updated:** February 26, 2018

Not yet evaluated

## :white_check_mark: Bulk Metadata Editor

* **Description:** Adds search and replace functionality allowing curators to update metadata fields over many records quickly and easily.
* **[Description page](https://omeka.org/classic/plugins/BulkMetadataEditor)**
* **Version:** 2.4
* **Updated:** April 05, 2017

Works

## :white_check_mark: COinS

* **Description:** Adds COinS metadata to item pages, making them Zotero readable.
* **[Description page](https://omeka.org/classic/plugins/Coins)**
* **Version:** 2.1
* **Updated:** March 23, 2021

Default plugin on our instance

## :white_check_mark: CSS Editor

* **Description:** Add public CSS styles through the admin interface.
* **[Description page](https://omeka.org/classic/plugins/CSSEditor)**
* **Version:** 1.1
* **Updated:** March 20, 2019

Works

## :white_check_mark: CSV Export Format

* **Description:** Adds CSV as an item export format. Can optionally work with annotations from IIIF Toolkit with Mirador.
* **[Description page](https://omeka.org/classic/plugins/CsvExport)**
* **Version:** 1.0.1
* **Updated:** July 28, 2017

Default plugin on our instance

## :white_check_mark: CSV Import

* **Description:** Imports items, tags, and files from CSV files.
* **[Description page](https://omeka.org/classic/plugins/CsvImport)**
* **Version:** 2.0.5
* **Updated:** August 14, 2020

Works

## :white_check_mark: Clean URL

* **Description:** Clean Url is a plugin for Omeka that creates clean, readable and search engine optimized URLs
* **[Description page](#)**
* **Version:** 2.16.1
* **Updated:** March 18, 2018

Works on Imperiia and Beautiful Spaces sites. Not currently on form, but could be.

## :question: Clickable Links Plus

* **Description:** Turns URLs in non-HTML text fields into »target='_blank'« clickable hyperlinks.
* **[Description page](https://omeka.org/classic/plugins/ClickableLinksPlus)**
* **Version:** 1.3
* **Updated:** April 07, 2021

Not yet evaluated

## :white_check_mark: Collection Tree

* **Description:** Gives administrators the ability to create a hierarchical tree of their collections.
* **[Description page](https://omeka.org/classic/plugins/CollectionTree)**
* **Version:** 2.1
* **Updated:** January 13, 2017

Works, but interacts weird with IIIF Toolkit. If Collections show sub-collection items, all item images are included in collection manifest in order. If not, only items directly in collection. IIIF Catalogue Tree maintains collection groups.

## :white_check_mark: Commenting

* **Description:** Allows commenting on Items, Collections, Exhibits, and more
* **[Description page](https://omeka.org/classic/plugins/Commenting)**
* **Version:** 2.3
* **Updated:** May 29, 2020

Doesn’t like being deactivated, causes errors but uninstall works

## :question: Connected Carousel

* **Description:** Shortcode embeds code for creating linked carousels, one with thumbnails and one with full image. The thumbnail carousel can be used to navigate the full image carousel. You can also just have a carousel of full size images you can click through. Also contains code for embedding in Exhibits.
* **[Description page](https://omeka.org/classic/plugins/ConnectedCarousel)**
* **Version:** 2.2
* **Updated:** August 17, 2018

Not yet evaluated

## :x: Contribution

* **Description:** Allows collecting items from visitors
* **[Description page](https://omeka.org/classic/plugins/Contribution)**
* **Version:** 3.2
* **Updated:** February 14, 2018

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

* **Description:** Adds custmizable student role
* **[Description page](#)**
* **Version:** 1.0
* **Updated:** March 16, 2018

Default plugin on our instance

## :question: Default Dublin Core

* **Description:** Omeka Plugin that allows administrators to specify default values for Dublin Core fields.  Dublin Core fields are then auto-filled with default values when records are created or edited.
* **[Description page](https://omeka.org/classic/plugins/DefaultDC)**
* **Version:** 1.0
* **Updated:** March 13, 2019

Not yet evaluated

## :question: Default Metadata

* **Description:** Omeka Plugin that allows administrators to specify default values for item metadata fields, including Dublin Core and Item Type Metadata fields. Metadata fields are then auto-filled with default values when items are created or edited.
* **[Description page](https://omeka.org/classic/plugins/DefaultMetadata)**
* **Version:** 3.0.1
* **Updated:** May 11, 2020

Not yet evaluated

## :white_check_mark: Default Sort

* **Description:** This plugin can be used to change Omeka's default sorting, which is set to date added.
* **[Description page](#)**
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
* **Version:** 1.0
* **Updated:** October 19, 2017

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
* **Version:** 2.2
* **Updated:** January 13, 2017

Works

## :white_check_mark: Editorial

* **Description:** Allows editorial feedback when building exhibits
* **[Description page](https://omeka.org/classic/plugins/Editorial)**
* **Version:** 1.1.0
* **Updated:** March 17, 2020

Works

## :white_check_mark: Elasticsearch

* **Description:** Integrate Elasticsearch into Omeka for searching.
* **[Description page](https://omeka.org/classic/plugins/Elasticsearch)**
* **Version:** 1.0.3
* **Updated:** December 19, 2017

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

## :question: Email Notification

* **Description:** Send e-mail notification when new Item or Collection or Exhibit is added.
* **[Description page](https://omeka.org/classic/plugins/EmailNotification)**
* **Version:** 1.3
* **Updated:** April 10, 2020

Not yet evaluated

## :white_check_mark: Embed Codes

* **Description:** Allows embedding item content as an iframe in other sites
* **[Description page](https://omeka.org/classic/plugins/EmbedCodes)**
* **Version:** 1.0
* **Updated:** June 19, 2013

Works

## :white_check_mark: Exhibit Builder

* **Description:** Build rich exhibits using Omeka.
* **[Description page](https://omeka.org/classic/plugins/ExhibitBuilder)**
* **Version:** 3.4.3
* **Updated:** March 23, 2021

Default plugin on our instance

## :white_check_mark: Exhibit Image Annotation

* **Description:** Annotate images in your exhibits.
* **[Description page](https://omeka.org/classic/plugins/ExhibitImageAnnotation)**
* **Version:** 1.0.1
* **Updated:** June 14, 2018

Works

## :x: Export

* **Description:** Extensible export plugin
* **[Description page](https://omeka.org/classic/plugins/Export)**
* **Version:** 0.1.0
* **Updated:** October 31, 2017

Not really an independent plugin, but rather a starting point and framework for a custom export plugin, so we don't need to offer it.

## :question: File Paginator

* **Description:** Allow users to page through files on an item page.
* **[Description page](https://omeka.org/classic/plugins/FilePaginator)**
* **Version:** 1.0
* **Updated:** January 30, 2020

Not yet evaluated

## :white_check_mark: Flickr Import

* **Description:** Adds the ability to import Flickr photosets and galleries into Omeka as items or collections, while preserving as much metadata as possible
* **[Description page](https://omeka.org/classic/plugins/FlickrImport)**
* **Version:** 1.3
* **Updated:** July 17, 2017

Single import seems to work, but I wasn't able to get a gallery import to work. Does require an API key from Flickr to work fully.

## :question: GDriveLinks Plugin

* **Description:** Uses the URL Item Type Metadata field to create links to Google Drive documents and/or embeds Google Drive documents within Omeka item views.
* **[Description page](https://omeka.org/classic/plugins/GDriveLinks)**
* **Version:** 1.0.0
* **Updated:** February 24, 2020

Not yet evaluated

## :white_check_mark: Geolocation

* **Description:** Adds location info and maps to Omeka
* **[Description page](https://omeka.org/classic/plugins/Geolocation)**
* **Version:** 3.2
* **Updated:** June 22, 2020

works

## :white_check_mark: Guest User

* **Description:** Adds a guest user role. Can't access backend, but allows plugins to use an authenticated user
* **[Description page](https://omeka.org/classic/plugins/GuestUser)**
* **Version:** 1.1.3
* **Updated:** February 15, 2018

Works, required for several other plugins

## :white_check_mark: HTML5 Media

* **Description:** Enables HTML5 for media files using MediaElement.js.
* **[Description page](https://omeka.org/classic/plugins/Html5Media)**
* **Version:** 2.8.1
* **Updated:** June 13, 2020

Works

## :white_check_mark: HarvardKey

* **Description:** Integrates HarvardKey SSO in Omeka
* **[Description page](#)**
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

## :question: Honor Thy Librarians

* **Description:** Give credit to people who have added or edited items in your Omeka database
* **[Description page](https://omeka.org/classic/plugins/HonorThyLibrarians)**
* **Version:** 1.1
* **Updated:** May 07, 2020

Not yet evaluated

## :white_check_mark: IIIF Toolkit

* **Description:** Embeds Mirador with a built-in annotator, a manifest generator and importer, Simple Pages shortcodes and Exhibit Builder blocks for a rich IIIF-compliant presentation experience.
* **[Description page](https://omeka.org/classic/plugins/IiifItems)**
* **Version:** 1.1.0
* **Updated:** March 15, 2018

Default plugin on our instance, but we use a custom fork

## :x: Import

* **Description:** Extensible import plugin
* **[Description page](https://omeka.org/classic/plugins/Import)**
* **Version:** 0.2.0
* **Updated:** October 31, 2017

Not really an independent plugin, but rather a starting point and framework for a custom import plugin, so we don't need to offer it.

## :x: Intense Debate

* **Description:** Embed Intense Debate comments on item and/or collection templates. Comments are moderated at intensedebate.com (account required).
* **[Description page](https://omeka.org/classic/plugins/IntenseDebate)**
* **Version:** 1.0
* **Updated:** October 19, 2017

Requires a separate "Intense Debate" account, where the discussions are managed. Could work, but involving another platform seems imprudent unless a user specifically requests it.

## :x: Item Duplicate Check

* **Description:** Check for duplicates before saving item
* **[Description page](https://omeka.org/classic/plugins/ItemDuplicateCheck)**
* **Version:** 0.2.0
* **Updated:** October 31, 2017

Install fails because db user doesn't have `REFERENCES` permission

## :question: Item Duplicator

* **Description:** Allows duplicating items
* **[Description page](https://omeka.org/classic/plugins/ItemDuplicator)**
* **Version:** 1.3
* **Updated:** December 30, 2020

Not yet evaluated

## :x: Item Neatline Display

* **Description:** adds Neatline view of an exhibit to item
* **[Description page](#)**
* **Version:** 0.1
* **Updated:** June 7, 2016

Jeremy made it, so if it's broken, it's his fault. However, it was made specifically for something Kelly O'Neill wanted, so probably doesn't need to be generally avaialable.

## :white_check_mark: Item Order

* **Description:** Gives administrators the ability to custom order items in collections.
* **[Description page](https://omeka.org/classic/plugins/ItemOrder)**
* **Version:** 2.0.2
* **Updated:** May 30, 2015

Works

## :white_check_mark: Item Relations

* **Description:** Allows administrators to define relations between items.
* **[Description page](https://omeka.org/classic/plugins/ItemRelations)**
* **Version:** 2.2
* **Updated:** March 09, 2021

Works

## :white_check_mark: Item Review

* **Description:** Adds the ability to mark all item created by certain user roles for administrative review before publication.
* **[Description page](https://omeka.org/classic/plugins/ItemReview)**
* **Version:** 1.1
* **Updated:** August 01, 2017

Email notifications won't work, but otherwise fine.

## :question: Job Diagnostics

* **Description:** View running jobs and diagnose problems with the job dispatcher.
* **[Description page](https://omeka.org/classic/plugins/JobDiagnostics)**
* **Version:** 1.0.0
* **Updated:** April 05, 2018

Not yet evaluated

## :white_check_mark: LC Suggest

* **Description:** Enable an autosuggest feature for Omeka elements using the Library of Congress Authorities and Vocabularies service: http://id.loc.gov
* **[Description page](https://omeka.org/classic/plugins/LcSuggest)**
* **Version:** 2.0.3
* **Updated:** November 07, 2019

Works

## :question: Limit visibility to own

* **Description:** Shows only items and collections contributed by the user
* **[Description page](https://omeka.org/classic/plugins/LimitVisibilityToOwn)**
* **Version:** 1.2
* **Updated:** May 04, 2021

Not yet evaluated

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

## :white_check_mark: Neatline

* **Description:** Plot your course in space and time.
* **[Description page](https://omeka.org/classic/plugins/Neatline)**
* **Version:** 2.6.3
* **Updated:** July 29, 2019

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
* **Version:** 2.0.2
* **Updated:** November 10, 2016

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

## :question: Omeka Footnotes JS

* **Description:** A plugin to add bigfoot.js footnote functionality to the WYSIWYG on simple or exhibit pages.
* **[Description page](https://omeka.org/classic/plugins/OmekaFootnotesJS)**
* **Version:** 1.1
* **Updated:** March 04, 2021

Not yet evaluated

## :question: PBCore 2

* **Description:** Adds elements for describing resources with the PBCore metadata standard
* **[Description page](https://omeka.org/classic/plugins/PBCore2)**
* **Version:** 1.0.0
* **Updated:** October 14, 2019

Not yet evaluated

## :white_check_mark: PDF Embed

* **Description:** Embeds PDF documents into item and file pages.
* **[Description page](https://omeka.org/classic/plugins/PdfEmbed)**
* **Version:** 1.0.1
* **Updated:** December 08, 2017

Works

## :x: PDF Text

* **Description:** Extracts text from PDF files so they can be browsed and searched.
* **[Description page](https://omeka.org/classic/plugins/PdfText)**
* **Version:** 1.3
* **Updated:** January 13, 2017

Requires a `pdftotext` command line utility installed on the server.

## :question: Podcast Feed

* **Description:** Adds a custom podcast feed and a new Podcast Episode item type.
* **[Description page](https://omeka.org/classic/plugins/PodcastFeed)**
* **Version:** 1.0
* **Updated:** November 08, 2018

Not yet evaluated

## :white_check_mark: Posters

* **Description:** Create interpretive posters using Omeka items.
* **[Description page](https://omeka.org/classic/plugins/Posters)**
* **Version:** 1.1
* **Updated:** February 14, 2018

Requires "GuestUser" plugin, but seems to work fine.

## :question: Project Guide

* **Description:** Omeka Plugin which allows administrators to configure a link to a custom project guide.  The link displays at the admin item view level and on the admin dashboard.
* **[Description page](https://omeka.org/classic/plugins/ProjectGuide)**
* **Version:** 1.0
* **Updated:** February 18, 2019

Not yet evaluated

## :question: Public Edit Link

* **Description:** Adds link to public UI to edit current Item/Collection/File when logged in.
* **[Description page](https://omeka.org/classic/plugins/PublicEditLink)**
* **Version:** 1.1.0
* **Updated:** April 01, 2021

Not yet evaluated

## :question: Reassign Files

* **Description:** Reassignes files from one Item to another.
* **[Description page](https://omeka.org/classic/plugins/ReassignFiles)**
* **Version:** 1.1
* **Updated:** April 20, 2021

Not yet evaluated

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

## :x: Reports

* **Description:** Generates item reports in HTML and QR Codes of items in PDFs.
* **[Description page](https://omeka.org/classic/plugins/Reports)**
* **Version:** 2.0.2
* **Updated:** November 22, 2016

Requires a folder on the server to be writable within files, not compatible with our storage adapter currently

## :x: Scripto

* **Description:** Adds the ability to transcribe items using the Scripto library.
* **[Description page](https://omeka.org/classic/plugins/Scripto)**
* **Version:** 2.4
* **Updated:** April 08, 2020

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

## :question: Shortcode Anyfile

* **Description:** Adds a shortcode to insert a file
* **[Description page](https://omeka.org/classic/plugins/ShortcodeAnyfile)**
* **Version:** 1.0.1
* **Updated:** August 04, 2018

Not yet evaluated

## :white_check_mark: Shortcode Carousel

* **Description:** Adds a shortcode to insert a carousel item viewer
* **[Description page](https://omeka.org/classic/plugins/ShortcodeCarousel)**
* **Version:** 1.0.1
* **Updated:** June 07, 2016

Works

## :white_check_mark: Simple Pages

* **Description:** Allows administrators to create simple web pages for their public site.
* **[Description page](https://omeka.org/classic/plugins/SimplePages)**
* **Version:** 3.1.3
* **Updated:** March 24, 2021

Default plugin on our instance

## :white_check_mark: Simple Vocab

* **Description:** A simple way to create controlled vocabularies.
* **[Description page](https://omeka.org/classic/plugins/SimpleVocab)**
* **Version:** 2.2.2
* **Updated:** June 03, 2019

Works

## :white_check_mark: Simple Vocab Plus

* **Description:** Allows for cloud based vocabulary definition and autosuggest features for Omeka elements
* **[Description page](https://omeka.org/classic/plugins/SimpleVocabPlus)**
* **Version:** 2.4
* **Updated:** November 14, 2016

Works

## :x: SimpleContactForm

* **Description:** Adds a simple contact form for users to contact the administrator.
* **[Description page](https://omeka.org/classic/plugins/SimpleContactForm)**
* **Version:** 0.6
* **Updated:** February 14, 2018

Error in `sendEmailNotification` function, Zend framework can’t send mail

## :white_check_mark: Sitemap 2

* **Description:** This Omeka 2.0+ plugin provides a persistent url for a dynamically generated XML Sitemap, for SEO purposes.
* **[Description page](https://omeka.org/classic/plugins/Sitemap)**
* **Version:** 2.3
* **Updated:** July 17, 2017

Works

## :white_check_mark: Social Bookmarking

* **Description:** Uses AddThis to insert a customizable list of social bookmarking sites on each item page.
* **[Description page](https://omeka.org/classic/plugins/SocialBookmarking)**
* **Version:** 2.0.3
* **Updated:** August 27, 2019

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

* **Description:** Adds configurable user profiles to omeka
* **[Description page](https://omeka.org/classic/plugins/UserProfiles)**
* **Version:** 1.2.1
* **Updated:** March 26, 2018

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

## :x: YouTube Import

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
