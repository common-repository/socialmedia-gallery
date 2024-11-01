=== SocialMedia Gallery ==
Tags: facebook, gallery, facebook API
Requires at least: 4.0
Tested up to: 4.9.1
Stable tag: 1.0.2
Requires PHP: 5.5

== Description ==

SocialMedia Gallery is easy to use gallery plugin for wordpress. It use shortcode to fetch photo from facebook album.

This plugin helps you to fetch all data and display on your website as you need. The Shortcode are easy to use and plently of guide are avaliable on facebook gallery page on dashboard. 

= Third Party scripts and style Used = 
* Simplelightbox (http://simplelightbox.com/)
* fitvids (http://fitvidsjs.com/)
* jQuery (https://jquery.com/)
* imgLiquid (https://github.com/karacas/imgLiquid)

= Feature =

* Fetch all facebook photo from album id
* Full Shortcode enable complete hassle free
* Responsive Light Box with Caption
* Developer friendly (you can use on owl carousel or other lightbox too)

== HOW TO USE ==

After installing the plugin, go to page or post where you want to display your gallery then add shortcode.

= To Fetch Facebook Photo From Page Gallery = 
[fb-gallery fbappid="" fbappsecret="" album_id="" total_fb_image=""]

Eg [fb-gallery fbappid="********" album_id="10150205173893951" fbappsecret="" total_fb_image=""]

= To Fetch Facebook Video From Page = 
[fb-video fbappid="" fbappsecret="" page_name="" total_fb_video=""]
 
** Here Page_name is Page you see on facebook like
https://www.facebook.com/Discovery/
Here Discovery is page_name

== Frequently Asked Questions ==
= What are shortcode options =
The shortcode option are as follows 
`fbappid` , `album_id` , `fbappsecret` , `total_fb_image`

= What is fbappid, album_id, fbappsecret, total_fb_image
* `fbappid` is application id from facebook. you can get this from facebook.
* `fbappsecret` is App Secret from facebook. you can get this from facebook.
* `album_id` is id of facebook gallery . you can get this from URL 
eg. https://www.facebook.com/pg/Discovery/photos/?tab=album&album_id=106163613585
here you can see album_id is 106163613585
* `total_fb_image` is total image you need to fetch like 20, 30 etc

= How do i get fbappid and fbappsecret = 
You can find really great tutorial on google just type How to get facebook app id and app secret
or visit link below
https://www.shoutmeloud.com/get-facebook-app-id-secret-key.html

= How can i change layout of gallery or video = 
Till now you need to change css file on assets/css/sm_gallery_style.css. Its not so complex. And i am working to make to change layout without having you to change css. 

== Installation ==

1. Upload the entire `fb-gallery` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use shortcode and enjoy

== Changelog == 
1.0.1 
* Initial Release

1.0.2
* Fixed Gallery Responsive Feature
* Add Facebook Video Fetcher Feature
* Changed CSS Naming to avoid conflit with other CSS


== Upgrade Notice ==
* Facebook Video Fetcher Feature Add in New Version
* Fixed Responsive Image Gallery