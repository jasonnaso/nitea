=== Google Tag Manager and Webmaster Tools ===
Contributors: 
Donate link: 
Tags: analytics, google, google tag manager, google webmaster tools, bing, tag manager, gtm, tagmanager
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extend your WordPress installation with the latest and most useful Google Tag Manager and optionally Webmaster tools.

== Description ==

Extend your WordPress installation with the latest and most useful Google Tag Manager and optionally  Webmaster tools.

All that is required of you is to enter your Google Tag manager ID in the settings area of the plugin. The Google Tag manager Javascript code will be automatically inserted at the highest possible location of your page.

= Features =
* Enable Google Tag Manager container on all pages.  
* Enable Google Site Verification via META tag in HEAD.  
* Enable Bing Webmaster Tools via META tag in HEAD.  
* Inject custom javascript in HEAD / footer section of every page.  

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Apply you unique Google Tag Manager ID in the settings area.

== Frequently asked questions ==

= Can I verify that my Google Tag Manager snippet is correctly installed? =
Normally you would enable the plugin in your wordpress admin area and insert your Google Tag Manager ID in this plugin settings configuration page. In Google Tag manager (https://www.google.com/tagmanager) you the would activate a Google Analytics Tag within your container for your wordpress site. As the Google Analytics Web Property ID get set and your version published, you may then log on to Google Analytics web UI (https://www.google.com/analytics/web/). Select your account and navigate to the real-time reports area and follow the Google Analytics data streaming to your account.

== Screenshots ==


== Changelog ==

= 1.3 =
* Option to add additional custom javascript to be inserted after the Google Tag Manager snippet in HEAD.

= 1.2 =
* Fix: W3 Total Cache compatibility issue, Prevent caching of objects after settings change
* http://wordpress.org/support/topic/plugin-w3-total-cache-param-9d7bd4-added-to-images-bad-user-experience-in-web-app-mode

= 1.1.5 =
* Assert dataLayer queue declaration.

= 1.1 =
* Pass WP Category as pageCategory to Google Tag Manager via dataLayer queue.

= 1.0 =
* Added support for Bing Webmaster Tools site verification meta tag.

= 0.9.5 =
* Update version number

= 0.9 =
* Fix broken link to options page in wp-admin

= 0.8 =
* Public release

== Upgrade notice ==

