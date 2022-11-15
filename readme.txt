=== Sample Auto Update Plugin ===
Contributors: bjmdigital
Tags: cards, posts, query, blocks
Requires at least: 5.0
Tested up to: 5.9.3
Requires PHP: 7.4
Stable tag: v1.0.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sample Plugin is a special plugin created by BJm Digital for added CPT cards functionality

== Description ==

Sample Plugin is a special plugin created by BJM Digital for added CPT cards functionality.

For details, please check [Github Repo](https://github.com/bjmdigital/blokki)

== Installation ==

1. Log in to your WordPress Site dashboard.
1. Go to “Plugins -> Add New” and click "Upload" button
1. Browse the installable .zip plugin file and upload.
1. Click to “Install Now” button.
1. Activate the plugin by clicking “Activate”.


== Frequently Asked Questions ==

= Does this plugin creat CPTs?  =

No, it only displays CPTs in various formats

= Is this available on Wordpress.org repo? =

No, Its a private plugin


== Changelog ==

**1.0.3**

*2022-11-15*

- Feature: For Blokki Cards block, now, there is an option to show the `related` posts. There is also an option to select which taxonomies to use for getting the related taxonomies. This applies to both Blokki Cards and WPGB integration.
- Feature: A new block *Blokki Content Accordion* added that can be used for any custom content toggle.
- Feature : Keyboard Tab key skip configuration added to `title`, `image` and `readmore`
- Dev: Code Cleanup and removed the WPGB block which was experimental and was not working.
- Dev: Some helper functions are added to get the block classes for ACF built blocks.
- Dev: Packages update to the latest versions and version number bump to 1.0.3


**1.0.2**

*2022-08-11*

- Fix: post type selection dropdown for cards query and case of specific posts
- Fix: blokki settings for wpgb grid integration for related and archive grid selection
- Fix: blokki acf block classes and helper function
- Dev: Updating npm command to create zip and readme updates
- Dev: Packages update to the latest versions and version number bump to 1.0.2

**1.0.1**

*2022-07-08*

- Dev: Updated npm packages to the latest versions
- Dev: Ability to create `.zip` file for plugin release
- Dev: Code Optimization and Refactoring
- Fix: Blokki block controls for spacing and visibility only to core, acf and blokki block types
- Fix: composer autoload path
- Fix: visibility and spacing controls not adding CSS classes
- Fix: Block alignment class added to social share block
- Schema Feature:
    - FAQPage Schema added for accordion block
    - Added ItemList schema for cards block
    - Option to turn off schema in plugin settings
    - Option to disable schema on Cards block
    - Caching System for Schema added by plugin for speed optimization

**1.0.0**

* Initial Release of plugin

== Upgrade Notice ==

Read Changelog for all the goodness added

