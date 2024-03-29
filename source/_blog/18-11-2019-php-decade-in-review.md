---
title: 'PHP Decade in Review'
date: '18 November 2019'
time: '19:30'
description: 'A quick review of big changes to PHP in the 2010s.'
order: 6
---

*Originally presented at [PHP Cape Town on November 18, 2019](https://www.meetup.com/Cape-Town-PHP-Group/events/266226390/). Script is in its original form.*

## Intro

Hey everyone. My name is Nik. Tonight I'll be talking about where we've come in the PHP community in the last decade. I'm sure some of you have had the following situation: You meet a new person and tell them you're a developer. They ask what you code in. You say PHP. They snicker or give some version of "my condolences". Or you just generally see people ripping into PHP and everything that is built on it.
Why does this happen? Why does PHP have such a bad reputation outside of the community? Have any of the usual arguments changed or faltered in the last decade? That's what I want to quickly explore tonight. This isn't going to be a code heavy talk because honestly it's Monday and we all write enough code.

## It's like an ex we keep going back to

To understand what has happened in the last 10 years, you also somewhat need to know how it all started. PHP was created in 1994 by Rasmus Lerdorf as essentially a collection of helper functions for building simple dynamic web apps, and was called "Personal Home Page/Forms Interpreter" or PHP/FI.

On PHP's wiki page you'll see a quote by Lerdorf saying he never intended to build a language; instead it just kind of grew organically.

This lack of concrete design from the ground up is what I think the source of all the complaints of PHP stem from. However, PHP is still incredibly easy to pick up and get running with, so its popularity grew in spite of its detractors.

Back to the 2010s.

PHP was still the go-to language for writing something on the web. It was very easy to set up on web servers and had a good variety of solutions for a lot of 2010 problems: Bulletin Boards, Wordpress, Magento. Hell, even Facebook was founded on PHP. To this day it's estimated that most websites out there are using PHP. While this isn't a problem in and of itself, most of those sites are using old, unsupported versions. PHP 5 was released in 2004 and 5.6's support only ended December 2018. Xneelo (formerly Hetzner SA) broke several websites a month or two ago because they had announced prior that they'd eventually be forcing an upgrade to php 7 and finally did it. They had even offered help in upgrading to their users.

So despite the great ease of setting up the servers and writing code for it, we had a few problems: For the most part there was no structured language design, most sites were using insecure versions, and since it was so easy to get into, people could write terrible code with it and it would still work. These and other issues were starting to wear some people down.

## A Fractal of Bad Design

Cut to Monday, 9 April 2012. A user by the name of Eevee had had enough. They made a blog post to vent. If you're a PHP dev and haven't read that article, it's worth checking out. When it came out I was still in grade 10, so I didn't get to it until 2017. At the time of its release, PHP had just released version 5.4 a month prior. The article starts with a preface I'm sure we can relate to:

"I’m cranky. I complain about a lot of things." And that's exactly what happens for the next 9,427 words.

Further down, "But I’ve got to get this out of my system. So here goes, one last try."

Now, the article is quite long so I won't go into it at depth. Its initial Stance section summarises things well. It asserts that PHP is unpredictable, inconsistent, inconcise, unreliable, and undebuggable, with definitions for each of these in the context of the article. Whether or not you agree with any of those points is up to you if you go and read it.

That blog post became the go-to source of truth if someone asks "why is PHP bad?" If you search for the title, you'll get tons of questions and supporting articles around it. I believe this is the point where it became *really* cool to hate on PHP, just like with JavaScript today.

## Along came a Hack

Of course, one blog post is not going to tear down what is essentially a web empire. The PHP development team kept chugging along, PHP 5.5 and 5.6 came and went, with improvements in exactly those five factors mentioned in a Fractal of Bad Design. But some of those features weren't things people really cared about. Meanwhile, Facebook had been cooking something in their wizard towers. In March 2014 they released Hack, a new programming language designed to interoperate seamlessly with PHP. The initial intent was to give more structure to PHP code, while deprecating more unused features they disagreed with. Its main claim to fame was static typing and what amounted to a local linter so you wouldn't test in the browser as much.

When I first learned about Hack, it seemed the hype around it was mostly that it would take over PHP and steer the community in a better direction by fixing all the problems they deemed more important than what the core PHP team was doing at the time.

It's been 5 years since Hack came out, and personally I haven't seen any big usage of Hack. Using builtwith.com I could see that there were only 2800 live sites using it and only 2 in South Africa. I think it's safe to say that Hack hasn't had the traction some would have hoped. Maybe it'll have an uptick in the future. but back to PHP.

## What has changed?

So, for those who haven't yet noticed because the decade just flew them by, it's not 2012 or 2014 anymore. There have been many changes and new features introduced to PHP, arguably fixing a large chunk of the complaints from the 5.4 days.

Composer came along in 2012, providing a more modern dependency management interface instead of PEAR.

PHP 7.0 came out in December 2015 and introduced quite a few new features, bugfixes and removed other things. The changelog is lengthy and clearly shows that between 5.4 and 7.0 there was a directed effort to improve PHP for the modern era.
We got things like return type declarations, anonymous classes and finally replacing many old PHP Error instances with proper Exceptions. 7.1-7.3 have also introduced more features in the direction of static typing, like a void return type and object parameter/return type hinting.

Of course, some of this is too little too late for some people to change their views on PHP. The more important part is PHP is still a very lively and growing language. Otherwise we wouldn't be here or this is secretly Liam's containment center for us to learn something else.

### Whatever happened to PHP 6.0?

Now, I did skip PHP 6. But of course, that's because PHP 6 never happened. There were discussions around it in 2005 already, and supposedly books claiming to cover it in 2008, before it was even supposed to be released. PHP 6 was essentially the testing ground meant to bring the serious changes to the language that we later got in 7+. One of the core changes was unicode support through the entirety of the PHP stack. However in development of that support there were constant problems like poor performance and breaking scripts.

PHP6's development eventually stalled from its constant issues related to Unicode support, but blocking other features from being released isn't ideal. So some work was backported to 5.3. Now with essentially 2 versions of the language, there was more work to do and support. Then after some light drama with the development stalling, PHP6 was relegated to a development branch and eventually abandoned entirely while PHP 5.4 went along.

## What of the frameworks?

Earlier I mentioned PHP had a lot of different frameworks and prebuilt solutions. These all contributed to the lack of momentum in adopting newer PHP versions because on top of upgrading your server and code, you might have had breaking changes in the framework itself that need to be accounted for. This isn't to throw shade on framework contributors, as that work certainly isn't easy.
In my experience, people generally don't like having fix something that isn't yet broken, so a lot of major services are still to this day using old framework versions like Laravel 4 or the countless number of outdated Wordpress installations which I'm sure the Wordpress peeps around here can attest to.

Of course, things at the so-called "cutting edge" aren't as bad in terms of requirements and support. Wordpress currently recommends PHP 7.3 and Laravel as of 6.0 requires PHP 7.2.

## Still a Fractal, but a prettier one

Is PHP still a "Fractal of Bad Design"? I don't think so. Many became (rightfully) fed up with the ecosystem in the early 2010s. Since then we've seen large improvements in the last 4 years alone, despite the detractors. Hack fell flat and we've kept chugging along. The PHP ecosystem is still large, active and varied. Whenever I see someone outside the community find out about the size and activity of the Wordpress or Laravel ecosystem, they're surprised.

## What of the future?

The PHP team isn't stopping here. In 10 days PHP 7.4 will release, which will bring static type declaration for class properties and opcache preloading. After that, PHP 8.0 is scheduled for late 2020 which, among other things, will bring JIT. If you're still stuck on 5.6 or 7.0, it's really time to upgrade.

For a longer list of upcoming features, check the PHP website or wikipedia page.

The next decade of PHP is certainly going to be an intresting one. Hope to see you guys there.

## Outro

Thanks for coming to my not-TED talk.
