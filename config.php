<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'www.thecapegreek.co.za',
    'head_title' => 'Nikolaos Spyratos - The Cape Greek',
    'description' => 'Personal & Professional website of Nik Spyratos, The Cape Greek.',
    'collections' => [
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'nav' => [
        'logo' => '/assets/images/profile-rounded.webp',
        'title' => 'Nik Spyratos',
        'subtitle' => 'TheCapeGreek',
        'links' => [
            [
                'title' => 'Thoughts',
                'name' => 'thoughts',
                'url' => 'thoughts'
            ],
            [
                'title' => 'Projects',
                'name' => 'projects',
                'url' => 'projects'
            ],
            [
                'title' => 'Reading',
                'name' => 'reading',
                'url' => 'reading'
            ],
            [
                'title' => 'test',
                'name' => 'test',
                'url' => 'test'
            ]
        ],
    ],
    'contacts' => [
        [
            'icon' => 'twitter',
            'alt' => 'Twitter',
            'url' => 'https://twitter.com/thecapegreek'
        ],
        [
            'icon' => 'linkedin',
            'alt' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/nikolaos-spyratos/'
        ],
        [
            'icon' => 'github',
            'alt' => 'GitHub',
            'url' => 'https://github.com/nikolaos-spyratos'
        ],
        [
            'icon' => 'envelope',
            'alt' => 'Email Address',
            'url' => 'mailto:nik.spyratos@gmail.com'
        ],
    ],
    'footer' => [
        'attributions' => [
            [
                'text' => 'Built with',
                'author' => 'Jigsaw',
                'url' => 'https://jigsaw.tighten.co'
            ],
            [
                'text' => 'Unicons by',
                'author' => 'Iconscout',
                'url' => 'https://iconscout.com/'
            ]
        ]
    ]
];
