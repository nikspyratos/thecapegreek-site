---
extends: _layouts.page 
section: body 
title: "Thoughts"
---

Here's a little brain dump.

@foreach($thoughts as $thought)
<div class="flex flex-col {{ $sizeClasses }} flex flex-col mx-4 mb-4 {{ $borderClasses }}">
<h3>
{{ $thought->title }}
</h3>
<span class="pb-1 text-sm italic">{{ $thought->date }}</span>
{!! $thought->getContent() !!}
<hr>
</div>
@endforeach
