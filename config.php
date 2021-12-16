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
//        [
//            'icon' => 'rss',
//            'title' => 'RSS',
//            'url' => '/rss.xml'
//        ]
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
        ],
        [
            'title' => 'Rands Leadership Slack',
            'subtitle' => 'Member',
            'url' => 'https://randsinrepose.com/welcome-to-rands-leadership-slack/'
        ],
        [
            'title' => 'NomadList',
            'subtitle' => 'Member',
            'url' => 'https://nomadlist.com/@thecapegreek'
        ],
    ],
    'companies' => [
        [
            'title' => 'Car & Classic',
            'subtitle' => 'Nov 2020 - Present',
            'description' => 'Europe\'s #1 classic car & auctions website ',
            'url' => 'https://carandclassic.co.uk'
        ],
        [
            'title' => 'Superbalist',
            'subtitle' => 'Jan 2020 - Nov 2020',
            'description' => 'South Africa\'s #1 fashion e-commerce website',
            'url' => 'https://superbalist.com'
        ],
        [
            'title' => 'TCT Digital',
            'subtitle' => 'Feb 2018 - Dec 2019',
            'description' => 'Developers of the Hey Jude app',
            'url' => ''
        ],
        [
            'title' => 'SABEN',
            'subtitle' => 'Jan 2017 - Dec 2017',
            'description' => 'ISP for South African Colleges',
            'url' => 'https://saben.ac.za'
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
