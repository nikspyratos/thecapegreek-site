<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://www.thecapegreek.co.za',
    'site_title' => 'Nik Spyratos - The Cape Greek',
    'site_description' => 'Personal & Professional website of Nik Spyratos, The Cape Greek.',
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
        'thoughts' => [
            'sort' => '-order'
        ]
    ],
    'navigation' => [
        'logo' => '/assets/images/profile-rounded.webp',
        'title' => 'Nik Spyratos',
        'subtitle' => 'TheCapeGreek',
        'links' => [
            'home' => [
                'title' => 'Home',
                'name' => 'home',
                'url' => '/'
            ],
            'thoughts' => [
                'title' => 'Thoughts',
                'name' => 'thoughts',
                'url' => '/thoughts'
            ],
            'blog' => [
                'title' => 'Blog',
                'name' => 'blog',
                'url' => '/blog'
            ],
//            'projects' => [
//                'title' => 'Projects',
//                'name' => 'projects',
//                'url' => '/projects'
//            ],
            'reading' => [
                'title' => 'Reading',
                'name' => 'reading',
                'url' => '/reading'
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
            'description' => 'Gathering South Africa\'s PHP Developers. Feel free to check drop by the next meetup!',
            'url' => 'https://superbalist.com'
        ]
    ],
    'companies' => [
        [
            'title' => 'SABEN',
            'subtitle' => 'Jan 2017 - Dec 2017',
            'description' => 'ISP for South African Colleges',
            'url' => 'https://saben.ac.za'
        ],
        [
            'title' => 'TCT Digital',
            'subtitle' => 'Feb 2018 - Dec 2019',
            'description' => 'Developers of the Hey Jude app',
            'url' => ''
        ],
        [
            'title' => 'Superbalist',
            'subtitle' => 'Jan 2020 - Nov 2020',
            'description' => 'South Africa\'s #1 fashion e-commerce website',
            'url' => 'https://superbalist.com'
        ],
        [
            'title' => 'Car & Classic',
            'subtitle' => 'Nov 2020 - Present',
            'description' => 'Europe\'s #1 classic car & auctions website ',
            'url' => 'https://carandclassic.co.uk'
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
