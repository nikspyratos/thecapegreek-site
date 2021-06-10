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
        return $section == 'home' || Str::contains($page->getPath(), $page->nav->links[$section]['url']);
    },
    'nav' => [
        'logo' => '/assets/images/profile-rounded.webp',
        'title' => 'Nik Spyratos',
        'subtitle' => 'TheCapeGreek',
        'links' => [
            'home' => [
                'title' => 'Home',
                'name' => 'home',
                'url' => ''
            ],
            'thoughts' => [
                'title' => 'Thoughts',
                'name' => 'thoughts',
                'url' => 'thoughts'
            ],
            'projects' => [
                'title' => 'Projects',
                'name' => 'projects',
                'url' => 'projects'
            ],
            'reading' => [
                'title' => 'Reading',
                'name' => 'reading',
                'url' => 'reading'
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
            ],
            [
                'text' => '',
                'author' => 'COVID-19',
                'url' => 'https://sacoronavirus.co.za'
            ]
        ]
    ]
];
