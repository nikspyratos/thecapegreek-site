<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'https://www.thecapegreek.co.za',
    'head_title' => 'Nik Spyratos - The Cape Greek',
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
    ],
    'communities' => [
        [
            'title' => 'ZATech',
            'subtitle' => 'Member',
            'description' => 'Slack group for the South African tech community',
            'link' => 'https://zatech.co.za'
        ],
        [
            'title' => 'PHP South Africa',
            'subtitle' => 'Organiser',
            'description' => 'Gathering South Africa\'s PHP Developers. Feel free to check drop by the next meetup!',
            'imageLink' => '/assets/images/superbalist.svg',
            'link' => 'https://superbalist.com'
        ]
    ],
    'companies' => [
        [
            'title' => 'SABEN',
            'subtitle' => 'Jan 2017 - Dec 2017',
            'description' => 'ISP for South African Colleges',
            'link' => 'https://saben.ac.za'
        ],
        [
            'title' => 'TCT Digital',
            'subtitle' => 'Feb 2018 - Dec 2019',
            'description' => 'Developers of the Hey Jude app',
            'link' => ''
        ],
        [
            'title' => 'Superbalist',
            'subtitle' => 'Jan 2020 - Nov 2020',
            'description' => 'South Africa\'s #1 fashion e-commerce website',
            'link' => 'https://superbalist.com'
        ],
        [
            'title' => 'Car & Classic',
            'subtitle' => 'Nov 2020 - Present',
            'description' => 'Europe\'s #1 classic car & auctions website ',
            'link' => 'https://carandclassic.co.uk'
        ]
    ],
    'projects' => [
        [
            'title' => 'thecapegreek.co.za',
            'subtitle' => 'You are here. See: recursion.',
            'description' => 'Built with Jigsaw & Tailwind',
            'link' => 'https://thecapegreek.co.za'
        ],
        [
            'title' => 'Personal cloud',
            'subtitle' => 'Like Goku',
            'description' => 'Self-hosted Nextcloud & Monica PRM using Ansible + Terraform',
            'link' => ''
        ]
    ]
];
