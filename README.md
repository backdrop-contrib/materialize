MATERIALIZE
===========

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Casual Usage
 - Advanced Usage
 - File Structure
 - Usage
 - SASS
 - Questions
 - License
 - Credits
 - Maintainers

INTRODUCTION
------------

Materialize is a "pretty" theme for something nice for desktop sites out of the box.
It may not be a good, plain base theme.  It uses:

- default Backdrop layouts
- some Bartik default CSS
- the Color module UI for changing theme colors
- Materialize CSS framework based on Google Material Design for a more beautiful site
- custom CSS form elements for easier mobile usage
- a single CSS file OR
- SASS stylesheets using libSASS and Grunt for workflow
- a mobile-friendly menu built in

"This theme differentiates itself by its simplicity and structure. It does not incorporate a great list of features but rather embodies a frontend workflow. Many of the existing themes are bloated with features and overwrites. We do not want to rewrite output, just makes it easier to develop a theme in a structured way."

TESTED
-----

@todo
This theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop.

KNOWN ISSUES
---------------------

NOTE -- this theme is in a heavy development state.  If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

This theme works as is by just installing it.

If it bothers you that we don't use the Libraries module, file an issue and we can try to change it.

When official information on using third-party frameworks becomes known, this will follow it.

This theme is in the process of retro-fitting its CSS into SASS.

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

"Created and designed by Google, Material Design is a design language that combines the classic principles of successful design along with innovation and technology. Google's goal is to develop a system of design that allows for a unified user experience across all their products on any platform."

This theme can use the Bourbon/Neat SASS extensions from thoughtbot.
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

REQUIREMENTS
------------

None
@todo

INSTALLATION
------------
- download and install this theme per usual Backdrop themes: <https://backdropcms.org/guide/themes>
- to see how this theme handles all the page elements, use this module <https://github.com/backdrop-contrib/styleguide>

COMING FROM DRUPAL?
-------------------

If you are using Backdrop and have a previous knowledge of Drupal, you will notice that Drupal themes spend a lot of template files and CSS arranging things on the page where this theme doesn't so much.  This theme is more of a style guide of how page elements are supposed to look and not much layout.  It relies on the layouts module.

This theme does not use the Material Design or Bootstrap grid by default.  It uses the default layouts module until layouts in Backdrop become more defined.

CASUAL USAGE
------------------

If you would like to use CSS instead of SASS, edit the css/style.css file to alter the appearence of your website.
Place your CSS at the bottom of the file.

If you would like to add custom Javascript to your site, edit the js/materialize_custom.js file.

ADVANCED USAGE
------------------

FILE STRUCTURE
------------------

Overall file structure

- The .info file is for the listing of files to incorporate into your theme.
- The color folder is for the Color module UI.  Probably not important to alter.
- The CSS folder contains the style.css file you should use, which is the file that gets loaded on every page.  It gets overriden by SASS if you use SASS.
- The JS folder contains many files, which are loaded on every page.
- The images folder is for your images and icons.
- The SASS folder is for your SASS CSS partials.
- Template.php contains PHP functions that alter the HTML of your Backdrop site.
- config.rb contains settings if you are using SASS Compass
- Gruntfile.js and package.json contain settings if you are using SASS Grunt

SASS file structure

Here is the default layout of SASS partial files in this theme.
COMPONENTS folder
_custom.scss
-- custom.scss contains the custom code on top of your SASS theme



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

After this has installed, use these commands on the command line in the root of your theme to make the theme do its thing:

Grunt tasks
===========
- grunt sass

compile the sass files

- grunt watch

start a watch and livereload session for the xtheme

- grunt prod

compile the theme for production

Compass compile
===========

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

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.

Maintainers
-----------

- seeking

Ported to Backdrop by:

 - biolithic <https://github.com/biolithic>
