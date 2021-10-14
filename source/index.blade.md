---
extends: _layouts.page
section: body
permalink: index.html
title: "Home"
---

I'm Nik. I build software for myself and for others. Exploration of life's many facets is my aim. This website is for my non-career oriented writings & projects.

## Some things I've worked on

Just the ones that made it over the finish line.
@include('_partials.item-card-list', ['items' => $page->projects, 'centered' => true])

---

## Where I hang out

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'lg:w-1/3', 'centered' => true])
