<?php

$config      = [];

$configFiles = [
    require __DIR__ . '/autoload/middleware.config.php',
    require __DIR__ . '/autoload/dependencies.config.php',
    require __DIR__ . '/autoload/router.config.php',
    require __DIR__ . '/autoload/navigator.config.php',
    require __DIR__ . '/autoload/templates.config.php',
    require __DIR__ . '/autoload/translator.config.php', // optional
];

foreach ($configFiles as $configFile) {
    $config = \Zend\Stdlib\ArrayUtils::merge($config, $configFile);
}

return $config;
