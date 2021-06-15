---
extends: _layouts.page
section: body
title: "Thoughts"
---

@include('_partials.collection-item-card-list', ['collection' => $thoughts, 'borderColour' => 'tcg_blue'])
