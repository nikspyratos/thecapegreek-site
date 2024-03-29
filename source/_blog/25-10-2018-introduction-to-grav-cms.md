---
title: 'Introduction to Grav CMS'
date: '25 October 2018'
time: '19:30'
description: 'An overview of Grav CMS.'
order: 4
---

*Originally presented at [PHP Cape Town on October 25, 2018](https://www.meetup.com/Cape-Town-PHP-Group/events/258058986/). Script is in its original form.*

## Introduction

Hey all. My name is Nik. Tonight I'll be presenting a short introduction to Grav CMS, on how it works and some cool things you can do with it. I host my notoriously unattended blog on it which I’ll show a link to later. So let’s get started. I’m really not a salesman or trying to sell anyone on this, I just find it a cool system to use and a breath of fresh air for the times I get tired of working with the bigger CMSes out there.

## The marketing blurb version

of what Grav is is a “fast, simple, and flexible file-based web platform”. Now that’s a pretty dense way of describing a system and could apply to a lot of things really. What it means here for Grav specifically is that performance and simplicity of use are two of the most important concepts that shape what it does and how it does it.

There are quite a lot of Open Source CMSes out there for building complex websites (your Wordpress, Joomla, Drupal, etc). However building on these platforms gives you some pretty locked-in knowledge of specifically how that platform works and not much else. Not to say you’re not learning anything useful by using those but sometimes you don’t want to specialise in these things and just want to get a darn website up and running.

## How Grav keeps it simple

is that there is no installation process required to get up and running. You can extract a ZIP of the latest version and start slamming out content. Next, there are no databases required to use it as it is flat-file based. All configurations are stored in the system. You can always use a DB later on with plugins if you still need to.

From its own description, the architecture is built with the intention of using established and so-called “best-in-class” technologies. This is also how the zero-install and flat-file design are achieved. The core technologies used in Grav are:
• Twig templating engine (which if you’ve used Laravel/Blade it’s pretty similar, though I prefer Blade)
• YAML for configuration storage
• Markdown for page content
• Doctrine Cache
• Symfony Console for CLI

Naturally there are several others but those are the most important ones for what I’ll be covering.

### Twig

Is a templating engine that some of you are probably familiar with of you’ve worked with Drupal or Symfony.

The short version for those that might not know is that you use it to make reusable page templates with it that a given page type (e.g. home page, blog post list, or individual components like a navigation bar) can use. I’ve worked a fair bit more in Blade myself, but there are some core differences.

Twig has some extra features added on like a sandbox mode where you can play with untrusted templates. Additionally, instead of replacing the control structures used with equivalent PHP code like in Blade, Twig compiles the structures with a Lexer and parses everything.

On the security side of things, Twig also limits which functions can be used in the template to those that you explicitly enable. For example, you can’t explicitly use Facades in a view (e.g. User::where(‘active’) ) without adding them to a config list first. This can end up being more work to get data out to the view but it also allows you to limit what your template designer can do in the cases where you’d need to.

### YAML

YAML is one of those recursive acronyms, standing for “YAML Ain’t Markup Language”. It’s intent is to be a human-readable data serialization standard. The really quick way to describe it is imagine if JSON used whitespace instead of braces, which depending on your opinion on Python is either a really good thing or a really annoying thing.

### Markdown

We should all here at least know what Markdown is even if we don’t use it. It’s a lightweight markup language with plain text formatting syntax. I’m sure we’ve all run into cases where you think your CMS’s WYSIWYG editor will be enough to get some page content done all neat and tidy but you’ve had to end up using the HTML editor and made some pretty ugly HTML code as a result.

Grav uses Markdown in an interesting way. The first part of any MD page will be a YAML header denoted by --- at the top and bottom of it. This way you can have all your post metadata and extra variables available at any time for the template to use, and with Grav’s admin backend you can modify the headers as you like as well. Most of these are automatically generated for you (e.g. blog post category, creation date, page title) during the page creation process but if one of your templates needs some other fancy variable to get something working on it you can add it yourself.

If however you don’t want to make your pages in Markdown, you actually have the option of writing them in Twig as well.

### Caching

Caching is something that permeates Grav’s system options. It uses the Doctrine Cache library, which supports several drivers like redis, memcached and so on.

Grav’s approach to caching allows you to customise pretty much any caching option from the admin panel directly without having to fiddle with anything on the server itself. You can toggle caching of every type of page asset. Twig, CSS, JS, images, even the output page itself.

### Grav CLI

Grav has it’s own CLI (using Symfony Console) which you can use for several administrative tasks like clearing the cache and making backups. It can also make use of CLI-specific plugins so the world is really your oyster with this system.

Included in this CLI is Grav’s own package manager (because of course we can never have enough package managers) for installing plugins. For those not so CLI-inclined there is also a plugin installer available on the admin dashboard.

### A peek at the admin interface

When first log into your admin dashboard on Grav you’re greeted by a clean and simple page that’ll show you some useful statistics about your site, including current version, last backup date, site visit statistics and notifications from the Grav dev team. From there it’s pretty straight forward and you’ll be able to go to your site configuration, pages, plugins, themes or site tools.

#### Site Configuration

There’s not much to elaborate on here. You change your site settings here. There are high level options like home page, date format and redirect settings, and then your more advanced options like caching, CSS/JS pipelining (where all a page’s CSS/JS assets will be compiled into one CSS/JS file) and a whooole lot more. What’s also useful here is there is an Info tab where you can view things like PHP-specific settings, which can be nice if you’re debugging.

#### Pages

From here obviously you’re able to view and modify your pages. The way pages are stored in Grav is you’ll have a folder with your page’s name, and in that folder will be a markdown file named after the page type. So for example on my site a blog post page has a “post” page type, where the folder will contain a post.md file. For container pages like a post list, it becomes a tree-like structure where your post list (e.g. Blog) folder will then contain the individual item folders. If there’s custom data in your container page it will also have its own markdown file for that data so you don’t lose that flexibility if you need it.

On the individual page editor you’ll get your standard WYSIWYG/MD editor and metadata options. The fun part comes in the advanced options. There you can change things like the parent (containing) page, the page’s template, and most importantly there are override settings available where you can override certain things like the caching and which rendering process is used (MD or Twig) to load the page.

#### Plugins

Now, when we consider whether or not to use a CMS often times a large part of that decision comes down to the amount of plugins available for the system. I’m fairly certain that for a large chunk of use cases, Grav has more than adequate plugin support. As of right now there are about 270 plugins available to install and use. Now, those are obviously incredibly tiny numbers compared to the big name competitors, but a lot of core options are supported. The Grav dev team has made quite a few plugins themselves, like OAuth2, git sync, and even a Snipcart plugin for working with e-commerce sites.

Otherwise I’ve found some pretty neat plugins like RSS feed generation, codepen embedding, and automatic SEO. If you’re interested in Grav then I’d say take a dive into the plugins page and you’ll probably find something cool to play with.

The main way to install plugins is either by fetching them through the admin interface or by using the CLI. Of course you can upload them yourself but that’s a bit of a waste of time.

#### Themes

Like with other CMSes, your themes determine a lot about the site you can build depending on the page or template types available. Grav’s theme availability is like expected small, but pretty robust. On my site I used the Medium theme and tweaked the CSS to turn it into a dark theme version.

Making a theme for Grav is pretty easy. Since it’s all Twig-based you can very easily and quickly set up your partial templates and components and make unique page types to base your application on.

#### Tools

Lastly there is the site tools page on the dashboard, which currently just provides two more options for installing themes and plugins: direct ZIP upload or by remote URL.

## Closing

That’s pretty much Grav in a nutshell. In my opinion Grav is a fun and lightweight system to play around with, and you can do some pretty cool things with it. I won’t say it’s groundbreaking or “the next big thing” because in the end it’s up to the individual if they like it and want to use it or not. If you want to check out Grav and some sites built with it, head on to getgrav.org. While searching for sites built in Grav I found the site I used to make the slides for this, slidecraft.com. Good luck and happy tinkering.
