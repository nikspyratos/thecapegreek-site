---
extends: _layouts.page
section: body
title: "Blog"
---

Blog posts & meetup talk transcripts.

@include('_partials.collection-item-card-list', ['collection' => $blog, 'cardSize' => 'lg:w-1/4', 'borderColour' => 'border-tcg_blue', 'centered' => true])
