---
extends: _layouts.page
section: body
permalink: index.html
title: "Home"
---

I build web apps for myself and others. 

I've been in the industry since 2017, in all sorts of team sizes from 2 to 50. My best work is done in product-oriented companies.

Online & offline communities are important to me. My main port of call is ZATech, and I organise the PHP South Africa meetup.

If you'd like to follow my work or get in touch, see above for social media, email & newsletter.

## Projects

@include('_partials.item-card-list', ['items' => $page->projects, 'centered' => true])

## Communities

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'lg:w-1/3', 'centered' => true])

## Writing

@include('_partials.collection-item-card-list', ['collection' => $blog, 'cardSize' => 'lg:w-1/4', 'centered' => true])

