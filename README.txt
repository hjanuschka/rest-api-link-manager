=== Plugin Name ===
Contributors: JPry
Donate link: http://example.com/
Tags: rest, rest api, api, json, link manager, links
Requires at least: 4.4
Tested up to: 4.4.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enable REST API endpoints for Links in the Link Manager.

== Description ==

Allow Links from the Link Manager to be manipulated and retrieved using the REST API.

This plugin makes the following endpoints available:

* `/wp-json/wp/v2/links` - List details for all links, or create a new link.
* `/wp-json/wp/v2/links/<id>` - List details for a particular link ID, update a link, or delete a link.

For more information about the REST API as a whole, refer to the [REST API plugin](https://wordpress.org/plugins/rest-api/).

**Note:** This plugin **requires** the [REST API plugin](https://wordpress.org/plugins/rest-api/).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/rest-api-link-manager` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= No questions yet! =

== Screenshots ==



== Changelog ==

= 1.0.0 =
* Initial version of the plugin.

== Upgrade Notice ==

= 1.0.0 =
You know you want to manage your Links with the API!
