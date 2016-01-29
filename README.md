MATERIALIZE
---------------------

Materialize is a "pretty" theme for something nice for websites out of the box.  It has a lot of "bells and whistles" and may not be a "lightweight, basic standard theme".

- this theme uses Materialize CSS framework based on Google Material Design for that Android/GMail look. "Created and designed by Google, Material Design is a design language that combines the classic principles of successful design along with innovation and technology."  Materialize, the general implementation was made by a team of students from Carnegie Mellon University.

- novices can edit the css/style.css file to alter the appearence of your website.

- or front end developers can use the libSASS, liveReload, NPM and Grunt built-in tools for a styling workflow

- novices can use the Responsive Menus or Mobile Navigation modules (downloaded separately) for dropdown or mobile-friendly main menu.

- or front end developers can theme their own menus without needing to un-theme existing menu CSS

- sliders, custom fonts and other theme features do not come with this theme and you are encouraged to incorporate separate modules for each page feature that you wish to have.

- a website needing "magic" or "to use 2016 trends" is a good example of how to use this theme.

- a financial news website is probably not a good fit for this theme.

- this theme contains checkboxes to serve base style/script files from your site or from Cloudflare CDN

- this theme contains checkboxes to serve modernizr script for browser feature detection, jquery-validate for form validation, fastclick for mobile tapping, and hammer for touch based events.  You must provide the custom integration for each.

- this theme contains easy UI background-image settings for Juiced layouts.

- You can change your website colours from this theme's settings page using the Color module.  (Though it is actually faster/more accurate just to edit the style.css or Sass files).  To use this functionality, enable the Color module on your website. Edit your theme .info file to remove the semi-colons from the stylesheets[all][] lines.  Finally, visit your theme settings page, select your colours, and hit save.  Because this is not a priority for all sites and we only have so much time, if you see an error while using this feature please raise an issue on https://github.com/backdrop-contrib or @biolithic and we will get to fixing it.


CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Coming From Drupal?
 - Javascript Usage
 - Advanced Usage
 - File Structure
 - SASS
 - Questions
 - License
 - Maintainers

TESTED
-----

This theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop 1.2.

http://dev-backdropthemes.pantheon.io/materialize

http://dev-backdropthemes.pantheon.io/demo-materialize

http://dev-backdropthemes.pantheon.io/admin/appearance/styleguide/materialize


KNOWN ISSUES
---------------------

If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

This theme uses Javascript for its features.

This theme has a lot of functionality and widget type add-ons bundled in that are not actively integrated yet.

It is more of a "theme framework to build off of" than a "plug-in-play" theme.

You can look through the folders and manually integrate what you need, or delete what you don't.

In time, we will get around to integrating this as well.  Thank you for your patience.

SPECIAL THANKS
--------------

This theme is based on of Xtheme for Drupal. <https://www.drupal.org/project/xtheme>
Special thanks to <https://www.drupal.org/u/frankbaele> for this great work!

This theme uses the Materialize front end framework from <http://materializecss.com/about.html>. Thanks to them for this adaption!

This theme uses Google's Material Design philosophy.
Special thanks to the developers at Google for the design basis of this theme.

You may extend this theme with the documentation/classes from <http://materializecss.com/>

This theme contains many files -- all the files from the Materialize distribution.  You may use what you need and disregard the rest.
You are free to look in the theme files and adapt what you see to what you desire for your site.

This theme can use the Bourbon/Neat SASS extensions from thoughtbot.
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

JAVASCRIPT USAGE
------------------

If you would like to add custom Javascript to your site, edit the js/materialize_custom.js file.

ADVANCED USAGE
------------------

FILE STRUCTURE
------------------

Overall file structure

- The .info file is for the listing of files to incorporate into your theme.
- The color folder is for the Color module UI.  Probably not important to alter.
- The CSS folder contains the style.css file you should use, which is the file that gets loaded on every page.  It gets overriden by SASS if you use SASS.
- The JS folder contains the scripts.js file you should use, which is the file that gets loaded on every page.
- The images folder is for your images and icons.
- The SASS folder is for your SASS CSS partials.
- Template.php contains PHP functions that alter the HTML of your Backdrop site.
- config.rb contains settings if you are using SASS Compass
- Gruntfile.js and package.json contain settings if you are using libSASS
- If you are not aware, the sass and node_modules folders do not need to be on the live server.  They are for local development only.

SASS file structure

This theme is in the process of retro-fitting its CSS into SASS.
We are in the process of converting from random code from different places into following:
<http://www.sitepoint.com/architecture-sass-project/>
<http://sass-guidelin.es/>

This file organization is described as such:

- style partial is where you can choose/add/remove which partials get added to the final overall CSS file
- print partial is not used by default but would contain styles for viewing printed copies of your website
- wysiwyg partial is not used by default but would contain styles for the rich text editors of your website

BASE FOLDER
- normalize and typography partials for people to work on the typography of the website

HELPERS FOLDER
- variables partial for people to work on the overall settings/defaults of the website
- extendables, functions, and mixins partials for people to work on the theming functions of the website

DESIGN FOLDER
- layout partial for people to work on the big picture and layout aspects of the website
- components partial for people to work on the atomic design, buttons, and small aspects of the website
- navigation partial for people to work on the header and footer of the website
- colors partial for people to work on the colors of the website

PAGES FOLDER
- partials for people to work on admin or authenticated user pages of the site which aren't public facing

THEMES FOLDER
- partials for people to work on different themes of the website (seasonal, regional, etc)

MATERIALIZE_LIB FOLDER
- the original Materialize framework SASS


USAGE
-----

SASS
-----

This theme can also use SASS for theming workflow.
The primary way to get started is by using NodeJS in your command line/terminal.

- NodeJS and NPM

Install and download NodeJS at: http://nodejs.org/ if you have already not done so on your computer for any other task.

- Grunt

Install and download Grunt on your command line: npm install -g grunt-cli if you have already not done so on your computer for any other task.

After you have those two dependencies working on your computer, use the command line to enter the root of your theme.

In the root of the theme, type

npm install

to install the SASS tools for this theme.

To enable livereload for development purposes, uncomment a line starting with this in the middle of your template.php file:
// backdrop_add_js("document.write('<script src=\"http://' + (location.host

After this has installed, use these commands on the command line in the root of your theme to make the theme do its thing:

Grunt tasks
---------------------
- grunt sass

compile the sass files

- grunt watch

start watching for changes you make to your files and on save automatically reload the page in your localhost.

- grunt prod

compile the theme for production

Compass compile
---------------------

You can also compile this theme with compass or ruby just install the following gems

gem install sass
gem install compass
gem install bourbon
gem install neat


Questions?
----------

Do you represent some code or project mentioned or used here and feel that this does not represent you correctly?
Let us know and the maintainer will happy to work with you or field your request, even taking this project down.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

Maintainers
-----------

- biolithic, seeking

Ported to Backdrop by:

- biolithic <https://github.com/biolithic>

