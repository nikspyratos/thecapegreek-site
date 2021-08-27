---
extends: _layouts.page
section: body
permalink: index.html
title: "Home"
---

# Home

Heyo, I'm Nik. I'm a Greek-South African software developer currently based in Cape Town. This website is a space for me to write, play, and share ideas.

Like most developers, I have opinions on things. This doesn't reflect the views of any client or employer of mine, past or present.

## Projects

Like many other developers, I work on a few side projects. Not all of these are always completed, but the learning experience and research process is a way to keep sharp.

Recent projects include:

@include('_partials.item-card-list', ['items' => $page->projects, 'centered' => true])

---
## Companies

@include('_partials.item-card-list', ['items' => $page->companies, 'cardSize' => 'lg:w-1/5', 'centered' => true])

---
## Community 

I'm a big believer in the value of professional & personal communities:

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'lg:w-1/3', 'centered' => true])

Other communities where you can find me:

- LaravelUK
- Laravel Greece
- MicroConf
- Rands Leadership Slack
- NomadList

---
## Get in touch

If you'd like to contact me, check the contact links on the top right.

