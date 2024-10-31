=== Random Quran Verse Widget ===
Tags: quran, islam, muslim, random, verse, muslim, masjid, widget
Requires at least: 2.0.2
Tested up to: 2.6
Stable tag: 1.0

Displays a random Quranic Verse on your widgetized sidebar from a text file.

== Description ==

This is a very simple plugin. It randomly displays a verse of the Holy Quran on your widgetized sidebar. 

I know there are a few others that due this, but those rely on an external service. This plugin has one text file 
that has all 6000+ verses and it just picks one randomly and displays it. Nothing fancy.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the folder `randomquranverse` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Design/Widgets' and place the widget on your sidebar.

== Frequently Asked Questions ==

= I keep getting the error: [function.file]: URL file-access is disabled in the server configuration in  xxxxxxx =

You need to make sure that 'allow_url_fopen' is be ON in PHP configuration (php.ini). Create a text file and call it 
php.ini and add the line:

allow_url_fopen = 1

== Screenshots ==

1. Sorry, Don't have any, but I don't think any are required. 