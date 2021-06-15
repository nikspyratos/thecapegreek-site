---
title: 'What has the PHP Community Built?'
date: '19 December 2020'
description: 'A look at some interesting projects in the PHP community'
order: 4
---

*Originally for [24 Days in December](https://24daysindecember.net/)*
[2021 update: Site has been moved from Grav, despite what this article says]

The PHP community is pretty large. It's easy to become isolated within the bubble of your chosen framework, version, or domain-specific code. Here's a look at some interesting PHP projects I've discovered over the years. Some of these are more well known than others, but all definitely deserve some love. Links to the websites will be in the headers.

Disclaimer: I'm not affiliated with any of these projects, but I do use a few of them.

## [Grav CMS](https://getgrav.org/)

Grav is an interesting alternative in the widespread CMS landscape. It's flat-file based instead of database reliant, which for simple websites makes getting from zero to deployed that much quicker. I even built my personal site with it!

There is no installation process required to get up and running. You can extract a ZIP of the latest version and start slamming out content.

Configuration and accounts are stored in YAML files in the system. Caching permeates Grav's design, speeding page delivery alongside JS & CSS pipelining to only serve single JS/CSS files. Themes are made using the Twig templating engine and pages themselves are written with Markdown. It's a highly portable package.

The plugin ecosystem is not as huge as other popular CMSes, but there are still quite a few plugins for all sorts of extra features.

## [October CMS](https://octobercms.com/)

October is a Laravel-based CMS, with a focus on simplicity of the user experience while still providing high-octane features for developers. I feel it's almost an understatement to call October a CMS, as it is a bit more involved than that.

Like Grav, it uses Twig (with a few extensions) for templating instead of Laravel's Blade. This allows a lot of fine-grain control over what your final page will look like while also being designer-friendly. The interesting bit is that themes and pages are managed through the October backend itself, not needing to dive into code and deploy things constantly (though that is always an option).

Installation/deployment of October is more akin to standard PHP systems, requiring certain PHP extensions and using a database. Like Wordpress, it has an installation wizard to make life easier.

Personally, what I find interesting with October is the intersection of providing a clean and understandable UX for non-technical people involved in the process, and the flexibility of a framework like Laravel to customise almost any aspect of the system. On top of that, the developers are quite active in supporting the plugin ecosystem and have quite a few of their own "default" plugins for October for you to get started with.

There's a lot more that I haven't mentioned here, so do take a look!

## [Matomo (formerly Piwik) Analytics](https://matomo.org/)

Of course, there's more to PHP life than CMSes. Matomo is a FOSS (GPLv3), fully-featured alternative to Google Analytics, and is quite proud of that fact. Their main method of income is support contracts and cloud hosting of the Matomo platform. However, you can self-host to get most of the feature set, save for more intricate features like A/B Testing and SAML integration.

Matomo reports on your full data set instead of a subset of it. You also get the benefit of full control and ownership of the generated data, which allows you to do your own extra analytics on top of it and is generally a boon to more privacy conscious developers and users.

Speaking of which, Matomo allows for GDPR compliance through a "GDPR Manager" which has features like anonymisation of data, right to erasure, deleting historical data, and more.

Matomo is a huge system, but well worth the effort of installation if going the self-hosting route, and has various relatively affordable pricing tiers.

## [Monica Personal CRM](https://www.monicahq.com/)

Monica came to my attention some time in the latter half of 2018. It's essentially a personal rolodex for the web age, built with Laravel. Like Matomo, it's FOSS and free for self-hosting, but you can also sign up for the cloud-hosted version for simplicity.

Now, if you use Facebook, your first thought about this is likely "why would I actually need this?", and it's a valid question. Then I'd ask you to consider how much you actually use Facebook to track information on your friends (aside from just their birthday) and not just for an endless feed of posts and memes.

Monica is not a social network. It is purpose-built for managing your relationships and storing information that you want to remember on your friends and family. You can store anything from relations between contacts, pets, debts owed or tasks related to a person from its interface.

From its own website, Monica claims it *"is for people who have jobs, a family, and are busy trying to find a good work/life balance. So busy, that they don’t have time anymore to remember to call a friend, say happy birthday to a nephew, or remember to invite someone special for dinner next week. The older we get, the more life gets in the way. It’s sad, but it’s the reality."*

If you're keen to try it out but aren't quite sure, you can sign up for free on the cloud version to try it out.

## [Nextcloud](https://nextcloud.com/)

Here we have another FOSS alternative product to a Google service, in this case mainly Google Drive and tools like Google Calender. As has become a pattern now, self-hosting Nextcloud is free, but you can pay for support or cloud/managed hosting. There are also client apps for all mobile and desktop platforms.

On top of the standard storage system, you can also get calendar, mail, contacts, and video calling. For more cool stuff, its plugin ecosystem is actually surprisingly well-rounded.

Nextcloud also offers extensive documentation related to its GDPR compliance and guides for administrators, as well as plugins for aid compliance available for your server.

I highly recommend Nextcloud for those who would prefer full control and data privacy for their cloud system, or businesses requiring the same control. Installing Nextcloud is fairly straightforward and there are many guides out there to get started with.

## [Kimai Time Tracking](https://www.kimai.org/)

Kimai is an open source (MIT) time tracking system. In the last year, Kimai has essentially been rebuilt (in Symfony), and its UI redone in the official v2. If any of you have seen the old v1 UI, you'll agree that using AdminLTE for the dashboard is a **vast** improvement over the previous UI. The old UI was quite dated and made me gloss over Kimai originally since I wasn't even sure if it was still actively supported.

The use of AdminLTE also means that Kimai is mobile-friendly as an added bonus. Unfortunately (or fortunately for some), Kimai only has a self-hosted option available. Kimai's main income source is extra plugins available on its marketplace. However its default feature set is already quite robust, including a JSON API for app integrations, LDAP support, switching between start/end time and duration-only modes.

Usually features like that aren't restricted on other time trackers, but you'll be capped on user accounts on free tiers and usually have to pay per user. Kimai naturally offers free as in beer and free as in freedom in this case.

If you're looking for a viable, free alternative for something like Harvest or Toggl, Kimai is definitely the way to go.

## [Attendize](https://www.attendize.com/)

Last, we come to Attendize. Attendize is an open source (AAL) event management and ticket selling platform. Another Laravel-based app, it is a fully-fledged system. The Attribution Assurance License essentially boils down to requiring "Powered By Attendize" to be displayed on all pages, but this and other restrictions (redistribution and using in SaaS products) can be removed by purchasing a license.

Stripe and Paypal are supported out of the box, and other integrations can be added. Omnipay is used as the payment proccessing system. Among Attendize's many features are affiliate tracking, widget sharing (for inclusion on other websites), a browser based QR scanner for door management, and easy attendee management (including messaging via email).

There's an online demo of the system available on the website. The UX is fairly smooth and displays the exact information you need. Overall, it's a healthy balance of no-nonsense yet having the ease-of-use you'd expect of a system like this.

------

While writing this post, I've come to realise you could self-host most tools required to run many businesses these days, from time tracking to analytics to business cloud. It's truly staggering how much there is out there in PHP land for us to make the most of. I hope you've found some interesting new tools to play with from this post. Enjoy!
