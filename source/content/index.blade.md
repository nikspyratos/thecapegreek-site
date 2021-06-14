---
extends: _layouts.main
section: body
permalink: index.html
title: "Home"
---

# Welcome to my website!

Heyo, I'm Nik. I'm a Greek-South African software developer currently based in Cape Town. This website is a space for me to write, play, and share ideas.

Like most developers, I have opinions on things. This doesn't reflect the views of any client or employer of mine, past or present.

---
## Community 

I'm a big believer in the value of professional & personal communities:

@include('_partials.item-card-list', ['items' => $page->communities, 'cardSize' => 'w-1/3', 'transparent' => true, 'centered' => false])

## Projects

Like many other developers, I work on a few side projects. Not all of these are always completed, but the learning experience and research process is a way to keep sharp.

Recent projects include:

@include('_partials.item-card-list', ['items' => $page->projects, 'borderColour' => 'tcg_purple', 'transparent' => false, 'centered' => false])

## Companies

@include('_partials.item-card-list', ['items' => $page->companies, 'cardSize' => 'w-1/5', 'transparent' => false, 'centered' => false])

## Get in touch

If you'd like to contact me, check the footer links on the bottom right.

