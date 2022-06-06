---
title: 'Is Privacy Dead? Part 2: Protecting yourself online'
date: '15 December 2017'
time: '20:00'
description: 'An article on privacy, tracking, and echo chambers.'
order: 3
---

### As promised, here's Part 2 of my privacy post.

#### In Part 1 I discussed how these days we are tracked in almost every which way possible, with an ever-increasing amount of ways being viable due to new data sources and better learning algorithms.

These algorithms not only track and learn from us, but have started creating ideological echo chambers for all of us to fall into. Let's look at ways to protect one's self from online tracking. There aren't set steps to doing it, but rather categories of things to look out for. Most tracking happens in your web browser, so that's where I'll be focusing on. I'll be linking to plugins for you to add to Firefox and/or Chrome throughout.

#### Step 1: Even your browser can track you

Google Chrome has convenient sync features to your Google account. It also enables Google to look at **all** of your browser data. If you _really_ like using Chrome, take a look at alternative Chromium-based browsers out there (notably the Chromium project, but that's a bit out of reach for common users). The most competitive (and privacy-friendly) alternative right now is Firefox (even more so with the Quantum update from November).

#### Advertising

Everybody hates advertisements. This is known. Most people reading this will also know of the existence of ad blockers. The most widely known one is AdBlock ( [Firefox](https://addons.mozilla.org/en-US/firefox/addon/adblock-plus/) / [Chrome](https://chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb)). It's a very good entry point and if that's as far as you want to go, that's fine. AdBlock has a "value added" feature of whitelisted ads, so as to more ethically serve advertisements to you and at the very least avoid the malicious ones.

The alternative is uBlock Origin([Firefox](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/) / [Chrome](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm)). uBlock claims to be more processor efficient than AdBlock, so there's also speed gains to be had from it. uBlock is far stricter than AdBlock and even has sibling extensions in the form of uBlock Origin Extra (Firefox features make it pointless for Firefox, but it's available for Chrome) and uBO-Scope to see just how exposed you are on a given website. With a bit of extra configuration, uBlock can also serve as a proper anti-tracker.

With one of these two extensions installed, you'll not only benefit from no longer having to view ads (even on video sites like YouTube), but you'll load web pages faster since you won't have to download the ad content. The only place these don't work is with native ads (Facebook posts, LinkedIn messages, etc.).

#### Anti-tracking

**EDIT 2018: since intially writing this post I have been informed that Ghostery was actually bought out by an advertising company and actually tracks the users. I apologise for not finding this out sooner. I have removed links to it and now recommend Privacy Badger.**

This is the crux of the post. Every social media share button has the potential to track you. Privacy Badger ([Firefox](https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/) / [Chrome](https://chrome.google.com/webstore/detail/privacy-badger/pkehgijcmpdhfbdbbnkijodmdjhbjlgp)) analyses the websites you visit to determine if they are tracking you, and blocks the tracking programs if they are.

#### Security

As mentioned in my [Blockchain post](https://thecapegreek.com/blog/bitcoin-and-blockchain-buying-bonanza), coin mining scripts have started to spring up this year that utilise your computer's power through the browser in order to mine cryptocurrencies for the website owners. This has some ethical cases (as with AdBlock's whitelist), but if you still don't want to take the risk then take a look at one of the NoCoin scripts out there.

Another handy extension is HTTPS Everywhere ([Firefox](https://addons.mozilla.org/en-US/firefox/addon/https-everywhere/) / [Chrome](https://chrome.google.com/webstore/detail/https-everywhere/gcbommkclmclpchllfjekcdonpmejbdp)). This extension forces all websites you go to to use the HTTPS protocol instead of plain HTTP. This provides added security because HTTPS content cannot be spied on. This is **especially** important for things like login pages and other pages with sensitive data input. I surely hope you don't want your login details stolen, do you?

### These are the main ways to protect yourself online while still having full web functionality. The platforms you use can still track you and all the data you produce on those platforms however.

#### Platforms and you

Have you ever considered leaving some of the bigger platforms like Facebook or Twitter? I'm sure the thought crossed your mind, and was immediately followed up with a big fear of missing out on big exciting things from your friends' lives or the ability to contact relatives easily.

The truth is the platforms we use are ubiquitous because we are social creatures. I won't be telling you what to do here, but I will be telling you that considering to remove those platforms from your life isn't impossible. Consider it and see where you go. While you're at it, also consider alternatives. There are privacy-driven and secure alternative messaging platforms like Riot.im and open-source social networks like Mastodon for Twitter people and Diaspora for Facebook people. I highly encourage you to take a look at these networks and see if you'd not gain from being there instead.

#### How far are you willing to go? De-Googling your life

Google specifically has quite the stranglehold on the internet. It provides applications in almost every field, and finds novel ways to consolidate them all to provide a diverse, yet connected product range. For that I do certainly applaud. It's not an easy task. But you do sacrifice all the data and behavioural patterns you submit to them by using their products. You might consider de-Googling your life then if you don't want to give it all to them. Change to alternative services like Tutanota/ProtonMail for email, private cloud services, Open Source programs for documents and spreadsheets, and so on. If Google has made it, there's a high possibility of an open, tracking-free alternative.

Some privacy activists I know have gone as far as to block every known Google and Facebook web domain from reaching their computers. It sounds like quite the world to live in.

##### How to search for things without Google, Bing, or Yahoo

Believe it or not, there are other search engines out there, and good ones at that. The most popular one, tailored to privacy specifically, is [DuckDuckGo](https://duckduckgo.com/). DuckDuckGo (DDG), in short, searches Google for you and avoids proprietary/sponsored answers to queries. I find it interesting to see the stark contrast of search result quality from DDG where Google doesn't know the person doing the asking versus on your account where they can almost read your mind.

### Protection at the highest level: from your own internet provider

Even your ISP can (and does) track you these days. I sure as hell don't pay my ISP hundreds of rands every month for a pittance of data at sub-1Mbps speeds to have all my things tracked. That's where **Virtual Private Networks (VPNs)** come in.

In short, a VPN can be described as a messenger in the middle between your computer and the internet. All internet traffic going in and out of your PC go through the VPN server first. To anyone spying on your network activity, all they're able to see is you connecting to that server. This allows you to prohibit your ISP and other unwanted parties from spying on you at the network level.

There are many many VPN services out there. **Just don't use a free one**. Remember from part 1: _**If you aren't paying for the product, you are the product**_. The first name that comes to mind for me is TunnelBear.

### Finally

This post is not intended as a how-to guide, but rather as a reference page for the main methods you can use to protect yourself online from trackers, malicious actors, and annoying ads. I hope you've found the information useful. If there's anything you didn't understand in the post, feel free to reach me on social media (check the About page) or to encourage curiousity and self-search: DuckDuckGo it!

##### Out of all the products mentioned here, I use:

- Firefox
- DuckDuckGo
- uBlock Origin + uBO-Scope
- Privacy Badger
- ProtonMail
- HTTPS Everywhere
- NoCoin

I'm in the process of de-Googling and will be acquiring a VPN as soon as I have a faster internet connection. I hope you enjoyed reading this. Until next time!
