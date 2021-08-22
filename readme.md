# webtrees module hh_extended_family

[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0)

![webtrees Major Version](https://img.shields.io/badge/webtrees-v2.x-green)
![Latest Release](https://img.shields.io/github/v/release/hartenthaler/hh_extended_family)

This [webtrees](https://www.webtrees.net) module creates an additional tab in the Individual view which lists the members of the core and the extended family of that person:
grandparents, parents, parents-in-law, co-parents-in-law, uncles, aunts, partners, siblings, siblings-in-law, co-siblings-in-law, cousins, nephews, nieces, children, children-in-law, and grandchildren.

<a name="Contents"></a>

## Contents

This Readme contains the following main sections

*   [Contents](#Contents)
*   [Description](#Description)
*   [Screenshots](#Screenshots)
*   [Requirements](#Requirements)
*   [Installation](#Installation)
*   [Upgrade](#upgrade)
*   [Translation](#translation)
*   [Contact Support](#Support)
<a name="Description"></a>

## Description

This module presents the core and the extended family of a proband. It is based on the [Eskimo kinship system](https://en.wikipedia.org/wiki/Kinship_terminology).

The user can filter the shown results by gender and dead/alive persons.

The admin can decide in the control panel 
* which extended family parts should be shown and in which sequence they should be presented
* if filter options should be presented for users
* how empty parts of extended family should be presented
* wheter the name of proband is a full name or a short version
* wheter labels like "adopted child", "foster child" or "triplet" should be used to indicate special situations (GEDCOM record to indicate that a person is a triplet, should look like "1 ASSO @I123@\n2 RELA triplet")
* whether a compact design should be used or an enriched version, showing a photo as well as complete birth and death information

The default presentation sequence of the extended family parts is oriented at the generation of the people in this part, relative to the proband
* grandparents                             // generation +2
* uncles and aunts                         // generation +1
* uncles and aunts by marriage             // generation +1
* parents                                  // generation +1
* parents-in-law                           // generation +1
* co-parents-in-law                        // generation  0
* partners and partner chains              // generation  0
* siblings                                 // generation  0
* siblings-in-law                          // generation  0
* co-siblings-in-law			   // Generation  0
* cousins                                  // generation  0
* nephews and nieces                       // generation -1
* children                                 // generation -1
* children-in-law                          // generation -1
* grandchildren                            // generation -2

<a name="Screenshots"></a>

## Screenshots

Screenshot of tab using the compact design
<p align="center"><img src="screenshot.png" alt="Screenshot of tab" align="center" width="80%"></p>

Screenshot showing photo as well as birth and death information
<p align="center"><img src="screenshot_full.png" alt="Screenshot showing photo as well as birth and death information" align="center" width="85%"></p>

Screenshot showing chain of partners (partner of partner of partner of ...)
<p align="center"><img src="screenshot_partner_chain.png" alt="Screenshot showing chain of partners" align="center" width="85%"></p>

Screenshot of control panel menu
<p align="center"><img src="screenshot_control_panel.png" alt="Screenshot of control panel menue" align="center" width="85%"></p>

<a name="Requirements"></a>

## Requirements

This module requires **webtrees** version 2.0 or later.
This module has the same requirements as [webtrees#system-requirements](https://github.com/fisharebest/webtrees#system-requirements).

This module was tested with **webtrees** 2.0.16 version and all available themes.

<a name="Installation"></a>

## Installation

This section documents installation instructions for hh_cousins.

1. Make database backup
1. Download the [latest release](https://github.com/hartenthaler/hh_extended_family/releases/latest)
1. Unzip the package into your `webtrees/modules_v4` directory of your web server
1. Rename the folder to `hh_extended_family`
1. Login to **webtrees** as administrator, go to <span class="pointer">Control Panel/Modules/Individual page/Tabs</span>, and find the module. It will be called "Extended family". Check if it has a tick for "Enabled".
1. Edit this entry to set the access level for each tree and to position the menu item to suit your preferences.
1. Finally click SAVE, to complete the installation.

<a name="upgrade"></a>

## Upgrade

To update simply replace the hh_extended_family files with the new ones from the latest download.

<a name="translation"></a>

## Translation

You can help to translate this module. The language information is at the end of the file module.php.
The German part is the most actual and can be used as a base for your translation.
Use a local editor, like notepad++ to make the translations and send it back to me. You can do this via a pull request (if you know how) or by e-mail.
Updated translations will be included in the next release of this module.

There are now, beside English and German, translations to
* Czech by @jpretired
* Dutch by @TheDutchJewel
* Italian (under preparation)
* Slovak by @ro-la
* Spanish by @yako1984
* Ukrainian by @z-yurets
* Vietnamese by @ngohuuthuan

<a name="Support"></a>

## Contact Support

You can report errors raising an issue in this github repository.

<span style="font-weight: bold;">Forum: </span>general webtrees support can be found at the [webtrees forum](http://www.webtrees.net/)

* * *
