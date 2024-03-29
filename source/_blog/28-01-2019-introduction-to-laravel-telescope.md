---
title: 'Introduction to Laravel Telescope'
date: '28 January 2019'
time: '19:30'
description: 'Playing around with the then-new Laravel Telescope.'
order: 5
---

*Originally presented at [PHP Cape Town on January 28, 2019](https://www.meetup.com/Cape-Town-PHP-Group/events/258058986/). Script is in its original form.*

## Introduction

Good evening all. Hope you all had a good holiday. I’m Nik Spyratos. Tonight I’ll be speaking about Laravel Telescope, how to get it running and what you can do with it. It’s a new tool that’s worthy of consideration for every Laravel developer’s arsenal.

Telescope was released in beta in October 2018 after being announced at Laracon Australia, built by Mohamed Said and Taylor Otwell. The best short overview is from the documentation itself:

*Laravel Telescope is an elegant debug assistant for the Laravel framework. Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps and more. Telescope makes a wonderful companion to your local Laravel development environment.*

Telescope does a tremendous amount of things for you right out of the box. It can monitor and log pretty much any aspect of your application, though my personal favourite feature is that it has a built-in dark mode.
Now of course, some aspects of Telescope are already covered by other packages for Laravel, like Horizon for Redis queues and Debugbar. However there are naturally some differences. Horizon is a monitoring and configuration tool for Redis queues only and Debugbar is, as its name implies, for debugging. Telescope on the other hand is intended to essentially be your application’s own private stalker, tracking its every move, and can be used in your production environment if so desired.

A large advantage that Telescope provides is that you don’t have to write your own custom monitoring code in each of your applications anymore, which will save you a lot of time and effort and allow you to only have to worry about your core business logic instead of monitoring it as well.

## Installation

Before we get to installation, just note that you do need to be using Laravel 5.7.7 and up. It’s worth the upgrade I feel, though depending on the changes and how far back your application is it might take a while.
Installing Telescope is very straightforward. You have to run 3 commands in your console:

> composer require laravel/telescope
> php artisan telescope:install
> php artisan migrate

There are some extra things you can do in the configuration (which can be found in the documentation), but for the general use case it’s not needed.

By default, telescope exposes a dashboard at `/telescope` of your application, but for local environments only. To enable authorized access only for the dashboard, there is a gate method in the TelescopeServiceProvider which controls access to Telescope for non-local environments. You have to modify this appropriately according to the authorization scheme for your application.

## Usage

### What to log

You can filter what exactly Telescope will watch and log for you in the service provider’s register method. For local environments, it will watch everything by default, and for others it’ll only watch exceptions, failed jobs, scheduled tasks and data with monitored tags.

Telescope gathers application data for requests and console commands through its watchers. Currently, there are 15 different watchers which cover the majority (if not all) of most Laravel applications. These are represented by their respective tabs in the dashboard. I’ll only be going through some of the ones I feel are the most notable, and you can check out the rest in the Laravel documentation.

### Watchers

#### Request

The requests tab is fairly self-explanatory. You can view all of the HTTP requests that come into your application, and inspect them in their entirety (payload, headers, response). If you’ve built APIs with Laravel (which I suspect a lot of us here have) then you’ll know that having this here saves a fair bit of time when debugging request issues or user bug reports.

There is a very nifty feature here with the Request watcher and others. Any associated (for lack of a better term) events that are watched by Telescope (logs, queries, mail, etc) that occurred as part of the request, will be linked here. This way you don’t have to bounce from tab to tab and you can view the client-server transaction in its entirety. Again, very useful for debugging, especially in the API context.

#### Command

In the Command tab you’ll see the commands that have been run in the console in your application, along with their exit codes. On an individual level you’re able to view arguments, options given and like with Requests, associated events like logging and so on.

#### Dump

The dump tab in Telescope is very unique. If you have the dump screen open in Telescope, any dump() method calls in your application will be displayed in Telescope and not in the actual application output. This allows you to neatly dump data without messing with your standard page load. Once you leave the dump screen your dumps will appear in in your page again.

This is personally one of the features I’m most intrigued by. I feel it’s a creative use of the Symfony Var-Dump Server, to embed it in a page.

#### Exception

What would an application monitoring tool be without exception monitoring? Here, all exceptions are logged and you can inspect each. Like other tabs related data will be linked here such as the associated request. If the same exception occurs multiple times, it’ll be grouped on the list page to save some space but you can still view the individual ones.

#### Job

The jobs tab shows past and currently running jobs. It’s similar to Horizon in the viewing aspect, but works with all queue drivers. You can view which connection and queue a job has used, its status and when it occurred. On the individual job’s page you’ll see specific details like number of tries, timeout, tags, and associated information (models, mail, etc).

#### Logs

The logs tab will should you the basic log message, its level and when it happened. Individually, you’ll see the rest of the log item’s details. If passing log context details as well, you can see all that data too, like the request that triggered the log and which user triggered it. This is much faster and simpler than digging through log files on a server.
#### Mail

Here you’ll see a list of emails sent, their recipients, send date, whether it is queued and when the queue fired it out. On the individual email you can even preview the email and download a raw .eml file of it to view in a specific email client. Anyone here who has tried to do email formatting that works in all major clients knows how immense a struggle this is, so this is a great help.

#### Model
On the models tab you can view all your create update delete events, which changes were made on each, and other details such as which job this occurred on and the model action’s tags. There’s not much else to explain for this one, however I’ll note that this tab will come in very handy if you don’t already track which changes are made to your model with something like Event Sourcing in place.

#### Queries

Next, your application queries. You can view how long they took, the full query itself, which request triggered it, and so on. There’s also a configurable boundary in the service provider for what a “slow” query is considered as, and all queries that are above that boundary will be tagged as slow and marked red. The search bar here can help with identifying these slow queries. Very handy when you’re trying to optimise your application as often the database and certain queries are the biggest bottlenecks.

That’s all of the watchers I’ll talk about tonight. Next there are some some extra configuration options you get with Telescope that we’ll go into.

### Configuring Telescope for your needs

You’ll notice that I mentioned monitored tags once or twice in relation to the watchers. By clicking the radar button and starting to monitor a certain tag (for example User:1), in production you’ll see requests and other items that wouldn’t ordinarily be logged for that tag.

#### Data pruning

Now, recording even a subset of all the watcher data will have things pile up pretty quickly for any amount of users. That’s why Telescope has a scheduled job to prune data older than a certain amount of hours, which is configurable in the telescope config file. Additionally, there is a `TELESCOPE_LIMIT` env variable that is 100 by default. This means Telescope will keep 100 entries of each watcher. You can even disable specific watchers entirely to save even more space and time.

I’d recommend using a separate database connection for Telescope. This way your application won’t hammer your main database with Telescope’s data. And, while I haven’t tested this yet, I’m sure you can use Telescope’s watchers on one Laravel application to save on a separate database connection, and then have a second Laravel application using the same connection just for viewing the data. By doing this you can separate your concerns greatly and monitor multiple applications that rely on the same data.

## Concluding

Telescope’s announcement was quite the news a few months ago, as it was essentially an early Christmas present for Laravel developers, which expanded on the already large and diverse Laravel ecosystem. I’d recommend trying it out even if you don’t immediately see a need or use for it for your applications.

There’s naturally aspects that I didn’t dive too deep into here this evening, and I’d suggest you all take a look at the documentation for Telescope and some articles on using it. Thanks for listening.
