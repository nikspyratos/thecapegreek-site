---
extends: _layouts.page
section: body
permalink: index.html
title: "Home"
---

I'm Nik. I build software for myself and for others. Exploration of life's many facets is my aim. This website is for my non-career oriented writings & projects.

## Projects

Just the ones that made it over the finish line.
@include('_partials.item-card-list', ['items' => $page->projects, 'centered' => true])

---

## Communities

I enjoy participating in online communities. My main port of call is ZATech, and I organise the PHP South Africa meetup.

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'lg:w-1/3', 'centered' => true])

## Writing/Talks

@include('_partials.collection-item-card-list', ['collection' => $blog, 'cardSize' => 'lg:w-1/4', 'centered' => true])

