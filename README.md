# WordPress-DB-Poop
Plugin Name:       DB Poop

Description:       Basic plugin to dump the DB

Plugin URI:        https://richard.pastenes.com

Contributors:      (list of wordpress.org usernames)

Author:            Richard Pastenes

Author URI:        https://richard.pastenes.com

Donate link:       https://richard.pastenes.com

Tags:              database, mysql

Version:           1.0

Stable tag:        1.0

Requires at least: 4.5

Tested up to:      4.8

Text Domain:       db-poop

Domain Path:       /languages

License:           GPL v2 or later

License URI:       https://www.gnu.org/licenses/gpl-2.0.txt


This is just a basic database dump plugin. Yes, there are gazillion plugins like this, I wrote this just to learn.

## Description ##

The plugin adds a DB Dump button/link to the WordPress admin bar, that when clicked, it dumps the database to a file
named db.sql on the root of the site.

Each time the button is clicked, the database is dumped and the db.sql file is overwritten.

The purpose of this, is to easily make the current WordPress instance more portable, by having both the site files
and database on the same directory, so it can be easily moved using Docker or a git repo (work in progress).

## Installation ##

1. Upload and unzip `db-poop.zip` to the `/wp-content/plugins/` directory
or go to Plugins > Add New > Upload Plugin and upload `db-poop.zip`
2. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions ##

Why?

Learning and because I want to make a dev version of WordPress super portable, that's the long term goal.

## Changelog ##

= 1.0 =
* First official version
