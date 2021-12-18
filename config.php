<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://www.thecapegreek.co.za',
    'domain' => 'thecapegreek.co.za',
    'siteName' => 'Nik Spyratos - The Cape Greek',
    'siteDescription' => 'Personal & Professional website of Nik Spyratos',
    'siteAuthor' => 'Nikolaos Spyratos',
    'siteLanguage' => 'en-gb',
    'selected' => function ($page, $section) {
        return ($section == '/' && $page->getPath() == '') || ($section != '/' && Str::startsWith($page->getPath(), $section));
    },
    'collections' => [
        'blog' => [
            'path' => 'blog',
            'sort' => '-order',
            'extends' => '_layouts.post',
            'section' => 'body'
        ],
    ],
    'navigation' => [
        'logo' => '/assets/images/Nik Spyratos.webp',
        'title' => 'Nik Spyratos',
        'subtitle' => '@TheCapeGreek',
        'links' => [
            'home' => [
                'title' => 'Home',
                'name' => 'home',
                'url' => '/'
            ],
        ],
    ],
    'contacts' => [
        [
            'icon' => 'twitter',
            'title' => 'Twitter',
            'url' => 'https://twitter.com/thecapegreek'
        ],
        [
            'icon' => 'instagram',
            'title' => 'Instagram',
            'url' => 'https://instagram.com/thecapegreek'
        ],
        [
            'icon' => 'linkedin',
            'title' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/nikolaos-spyratos/'
        ],
        [
            'icon' => 'github',
            'title' => 'GitHub',
            'url' => 'https://github.com/nikolaos-spyratos'
        ],
        [
            'icon' => 'envelope',
            'title' => 'Email',
            'url' => 'mailto:nik.spyratos@gmail.com'
        ]
    ],
    'footer' => [
        'siteLinks' => [
            [
                'prefix' => '',
                'text' => 'COVID-19',
                'url' => 'https://sacoronavirus.co.za'
            ],
            [
                'prefix' => 'Built with',
                'text' => 'Jigsaw',
                'url' => 'https://jigsaw.tighten.co'
            ],
            [
                'prefix' => 'Unicons by',
                'text' => 'Iconscout',
                'url' => 'https://iconscout.com/'
            ],

        ]
    ],
    'communities' => [
        [
            'title' => 'ZATech',
            'subtitle' => 'Member',
            'description' => 'Slack group for the South African tech community',
            'url' => 'https://zatech.co.za'
        ],
        [
            'title' => 'PHP South Africa',
            'subtitle' => 'Organiser',
            'description' => 'Gathering South Africa\'s PHP Developers',
            'url' => 'https://phpsouthafrica.org'
        ]
    ],
    'projects' => [
        [
            'title' => 'thecapegreek.co.za',
            'subtitle' => 'You are here. See: recursion.',
            'description' => 'Built with Jigsaw & Tailwind',
            'url' => 'https://thecapegreek.co.za'
        ],
        [
            'title' => 'Personal cloud',
            'subtitle' => 'Like Goku',
            'description' => 'Self-hosted Nextcloud & Monica PRM using Ansible + Terraform',
            'url' => ''
        ]
    ],
];
