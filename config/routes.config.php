<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use LeaveManager\Controller;

return [
    'leave-manager' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/leaves',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'index'
            ]
        ]
    ]
];
