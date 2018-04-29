# Theme information
Name: Ruffie
Author: Kniffen (http://kniff.xyz)
License: GNU General Public License v3

# Copyright
Ruffie WordPress Theme, Copyright (C) 2016, Kniffen
Ruffie is distributed under the terms of the GNU GPL v3

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

-----------------------------------------------------------------------------

# Libraries
# The theme bundles the following third-party resources:

normalize.css v3.0.2
  License: MIT
  Source: git.io/normalize

Font Awesome 4.6.3 by @davegandy
  Font License
    Applies to all desktop and webfont files in the following directory: font-awesome/fonts/.
    License: SIL OFL 1.1
    URL: http://scripts.sil.org/OFL

  Code License
    Applies to all CSS and LESS files in the following directories: font-awesome/css/, font-awesome/less/, and font-awesome/scss/.
    License: MIT License
    URL: http://opensource.org/licenses/mit-license.html

-----------------------------------------------------------------------------

# Changelog

1.0.0 - 2016.05.24
- Initial release

1.1.0 - 2016.05.27
- Reworked archive title prefix icon
- Added breadcrumbs

1.1.1 - 2016.06.11
- Fixed global variable names

1.2.0 - 2016.06.17
- Removed HTML5 Shiv
- Updated and moved Font Awesome
- Fixed various style bugs and issues
- Fixed various RTL style bugs and issues
- Removed debugging console log from functions.js

1.3.0 - 2016.10.15
- Included copyright information in style.css and readme.txt
- Included complete Font Awesome package and license decleration
- Removed closing ?> tag in required files (customize.php and theme_functions.php) to prevent possible "Header already sent" errors
- Removed Google and WhatsApp social icons
- Added prefix to enqueued styles and scripts in funtions.php
- Replaced JS detection in functions.php with one in js/functions.js
- Cleaned up template parts, post formats and image.php
- Removed customize logo setting in favor of native WordPress custom logo support
- Fixed only logo or being displayed
- Fixed displaying social media wrapper when no social icons are set
- Replaced custom get_the_archive_title filter with JS solution
- Removed author url from footer
- Escaped various user inputs

1.3.1 - 2016.11.03
- Enqueued comment-reply script
- Replaced customized css styles being added to the header with wp_add_inline_style option

1.3.2 - 2016.11.06
- Added editor stylesheet

1.4.0 - 2016.12.12
- Fixed various escapes and translations
- Fixed date stamp in footer
- Removed html5 theme support for search and comment forms
- Moved inline styles to dedicated CSS class
- Fixed add_editor_style being called more than once
- Fixed editor-style.css
- Removed breadcrumbs

1.4.1 - 2016.12.13
- Fixed more escapes and translations
- Fixed missing editor styles

1.4.2 - 2016.05.18
- Updated theme information for author rebranding
- Added table of contents to style.css

Simplified js/functions.js