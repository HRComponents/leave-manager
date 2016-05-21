<?php

return [
    "dependencies" =>  [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ],
    'middleware_pipeline' => [
        'always' => [
            'middleware' => [
                // Add more middleware here that you want to execute on
                // every request:
                // - bootstrapping
                // - pre-conditions
                // - modifications to outgoing responses
            ],
            'priority' => PHP_INT_MAX,
        ]
    ]
];
