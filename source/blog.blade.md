---
extends: _layouts.page
section: body
title: "Thoughts"
---

@include('_partials.collection-item-card-list', ['collection' => $blog, 'cardSize' => 'w-1/4', 'borderColour' => 'tcg_blue', 'centered' => true])
