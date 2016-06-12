<?php

/**
 * We inform the application about controllers we expect to have in the application.
 *
 * @see https://zendframework.github.io/zend-mvc/quick-start/#create-a-route
 */

use Zend\ServiceManager\Factory\InvokableFactory;
use Academiae\LeaveManager\Controller;

return [
    'factories' => [
        Controller\PageController::class       => InvokableFactory::class,
    ]
];
