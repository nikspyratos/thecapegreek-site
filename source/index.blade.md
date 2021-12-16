---
extends: _layouts.page
section: body
permalink: index.html
title: "Home"
---

Building software for myself and for others. I believe in *Process* over *Metrics*.

## Projects

@include('_partials.item-card-list', ['items' => $page->projects, 'centered' => true])

---

## Communities

I enjoy participating in online communities. My main port of call is ZATech, and I organise the PHP South Africa meetup.

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'lg:w-1/3', 'centered' => true])

## Companies

My best work is done in product-oriented companies. I've worked in all sorts of team sizes from 2 to 50.

@include('_partials.item-card-list', ['items' => $page->companies, 'cardSize' => 'lg:w-1/3', 'centered' => true])

## Writing/Talks

@include('_partials.collection-item-card-list', ['collection' => $blog, 'cardSize' => 'lg:w-1/4', 'centered' => true])

