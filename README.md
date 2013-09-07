Updates
===========

Code cleaned by zelles

Chat added by zelles


Description
===========

mmcFE-ng is a web frontend for pooled crypto-currency mining.

The web frontend layout is based on mmcFE, by Greedi:
https://github.com/Greedi/mmcFE

The web frontend had a chat added, the code cleaned, and updated by zelles:
https://github.com/zelles/php-mmcfe-ng-zelles/

**NOTE**: This project is still under development. I do not recommend using 
this for a live setup with out checking the code and thouroughly testing it.


Donations
=========

For those of you that are willing to appreciate the updates contained in here. 
Feel free to donate to my Franko address: `F9sEnur7M4kWVofBpfsVZ9fNcNWatE8tCt`


Requirements
============

This setup has been tested on Windows 8, Ubuntu 12.04, Ubuntu 13.04 and CentOS.
It should also work on any related distribution (RHEL, Debian).
For support on how to get `litecoind` or `pushpoold` to work, please ask
in the appropriate forums.

Be aware that `mmcfe-ng` is **only** for pooled mining. Solo Mining is not
supported. They will never match an upstream share, solo miners do not create
any shares, only blocks. Expect weird behavior if trying to mix them. See #299
for full information.

* Apache2
 * libapache2-mod-php5
* PHP 5.4+
 * php5-mysqlnd
 * php5-memcached
 * php5-curl
* MySQL Server
 * mysql-server
* memcached
* pushpoold
* litecoind


Features
========

The following feature have been implemented so far:

* Slide in Chatroom for 'zelles' theme
* Fully re-written GUI with [Smarty][2] templates
* Mobile WebUI
* Reward Systems
  * Propotional
  * PPS
  * PPLNS **NEW**
* Statistics are cached in Memcache by Cronjob for quick data access
* Web User accounts
  * Re-Captcha protected registration form
* Worker accounts
  * Worker activity (live, past 10 minutes)
  * Worker hashrates (live, past 10 minutes)
* Pool statistics
* Minimal Block statistics
* Pool donations
* Pool fees
* Manual payout
* Auto payout
* Transaction list (confirmed and unconfirmed)
* Admin Panel
  * Cron Monitoring Overview **NEW**
  * User Listing including statistics
  * Wallet information
  * User Transactions **NEW**
  * News Posts
* Notification system
  * IDLE Workers
  * New blocks found in pool
  * Auto Payout
  * Manual Payout
* Support for various Scrypt based coins via config
  * FRK
  * LTC
  * ...


Installation
============

Please take a look at the [Quick Start Guide](https://github.com/TheSerapher/php-mmcfe-ng/wiki/Quick-Start-Guide). This will give you
an idea how to setup `mmcfe-ng`.


Contributing
============

You can contribute to this project in different ways:

* Report outstanding issues and bugs by creating an [Issue][1]
* Suggest feature enhancements also via [Issues][1]
* Fork the project, create a branch and file a pull request to improve the code itself


Contact
=======

You can find me on Freenode.net, #mmcfe-ng.

Skype zelles at: "zelles." without the quotes. with the period!


Chat Section License and Author
==================

Coded by: zelles

The chat system added is 100% open-source and free to use. Use it anywhere and 
modify it in anyway you would like. There is NO required text, copyright, crap 
license, or guidlines like most open-source authors...


License and Author
==================

Copyright 2012, Sebastian Grewe

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

  [1]: https://github.com/TheSerapher/php-mmcfe-ng/issues "Issue"
  [2]: http://www.smarty.net/docs/en/ "Smarty"
