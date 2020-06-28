# Tech Showcase

## Overview

This exercise is designed to examine your ability to;

* Understand key requirements
* Utilise third party libraries
* Implement effective tests

## Guidelines

* Fork this repository
* Commit often
* Create a PR back to the repository once you're happy

## Tasks

* Create a basic implementation, in a framework of your choice, (or using bare PHP code), which:
   * Collects the [NSW government school enrolments by head count (2004-2018)](https://data.cese.nsw.gov.au/data/dataset/nsw-government-school-enrolments-by-head-count)
   * Presents the above data in a somewhat useful fashion
   * Refreshes the data if it is older than a defined period, (you can define the period)
* Implement tests to validate key aspects of the above, (_a_ test, at least)
* Add a method that allows a user to view information about the dataset, (eg; when it was last downloaded, how many records, etc).
* Provide basic usage instructions so we know what you've done

## Notes

* Try to spend less than a few hours - you may cut features or spend more time.
* We are not assessing your ability to turn this around quickly - we all have lives and jobs to attend to.
* When submitting the PR, commentary is appreciated.
* You may create and use a database for this process if you feel it is necessary.
* For any area you choose to skip, or cannot complete, describe what you would do using psuedocode or comments in it's place

## Key outputs

* A data transfer process that handles failure
* An efficient data transformation process
* Tests that run

# Guideline From Sohany

## Laravel Documentation
https://laravel.com/docs/7.x

### Installation ###

Note that, The whole process below will take around 15-30 minutes to setup. 
* type `git clone https://github.com/sohanyakter9/techshowcase.git projectname` to clone the repository 
* type `cd projectname`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* change MySQL DB configs in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* type `php artisan migrate --seed` to create and populate tables
* type `php artisan serve`to run the server. This will show the url where you can access the site you just setup.

#### Test
* You type and run `php artisan tinker` in your project root directory.
* type and run `DB::statement('create database test;');` to create a test database.
* type `./vendor/bin/phpunit tests/Feature/SchoolsControllerTest.php` to run the test.

### License ###
This example for Laravel is open-sourced software licensed under the MIT license. The example is a copy of https://github.com/bestmomo/laravel5-5-example

### Note
1. Developed the functionality to store the data into database from json using laravel.
2. Prepared frontend to display the information in a meaningfull way.
3. Display data based on year (when you choose the specific year and submit the form then it will not appear the older data from the specified year).
4. Developed a test function to check the models and controller are working succesfully.

Note: 
* Due to large volume of data, we can use cron job to insert query data to tables in a chunk records
* One task wasn't clear to me so I couldn't finish the task (Add a method that allows a user to view information about the dataset, (eg; when it was last downloaded, how many records, etc).) 
