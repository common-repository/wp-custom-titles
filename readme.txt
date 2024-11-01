=== WP Custom Titles ===
Contributors: chmac
Donate link: http://www.callum-macdonald.com/code/donate/
Tags: title, post title, page title, custom title
Requires at least: 3.4
Tested up to: 3.4.1
Stable tag: 0.1

One title for the navigation and one for the page (or post) itself.

== Description ==

This is an extremely simple plugin weighing in at 31 lines long.

If you add a custom field to a post or page called "custom_title" then the value of that custom field will be used as the post or page's title when the post or page is being displayed. For example, you have a page called FAQ which will appear in the nav menu as FAQ and you add a custom field custom_title with "Frequently Asked Questions" then the page title will appear as "Frequently Asked Questions" on the /faq/ page, but in the menu it's still FAQ.

This plugin was inspired by the [WP Title-2](http://wordpress.org/extend/plugins/wp-title-2/ "The WP Title 2 plugin") plugin but uses a **much** simpler approach. There is no menu or interface of any kind. You simply add a custom field to the posts you want to modify.

== Installation ==

1. Download
2. Upload to your `/wp-contents/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Will this plugin affect performance? =

Great question. In theory, it's possible. The plugin works by filtering the_title(), checking to see if we're in_the_loop() and if we are, looking up the custom field value for custom_title. That might result in a single database query. In theory, the result should be well cached by WordPress, at least on a per-request basis, but the custom fields are not necessarily preloaded with the post, so it might an extra query. If you run any benchmarks and can measure the impact of this plugin I'd be very keen to see your data.

= Where can I find support? =

The simple answer is you cannot. This readme file is longer and took more time to write than the plugin itself. I've published this plugin because I adore simplicity and changing the title from a custom field seemed like it should be outrageously simple. All I could find were massive plugins with zillions of lines of code. I looked at their methodology, was disappointed, and wrote something simple. But providing support takes time and effort, and often times people ask questions with an air of expectation waaaay beyond the plugin's price tag.

So to summarise, if you're clear that the plugin is free, you have absolutely **no right** to support, then you're welcome to send me a pleasant request for help and if you catch me at a good time, I may well respond.

== Screenshots ==

There are no screenshots as there is nothing to see...

== Changelog ==

= 0.1 =
* Initial release.
