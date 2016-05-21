<?php

use Academe\Leave;
use CodingMatters\Kernel;

return [
    "dependencies" =>  [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => [
            Leave\Page\IndexPage::class => Kernel\Factory\PageFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'leave',
            'path' => '/leave',
            'middleware' => Leave\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ],
//        [
//            'name' => 'manage-leave',
//            'path' => '/leave/manage',
//            'middleware' => Leave\Page\ProfilePage::class,
//            'allowed_methods' => ['GET'],
//        ]
    ]
];
