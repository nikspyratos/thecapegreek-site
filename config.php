<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'www.thecapegreek.co.za',
    'head_title' => 'Nikolaos Spyratos - The Cape Greek',
    'description' => 'Personal & Professional website of Nik Spyratos, The Cape Greek.',
    'collections' => [
        'posts'
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
