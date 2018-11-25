<?php
namespace Album;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'aliases' => [
            //
        ],
        'factories' => [
            //
        ],
    ],
    'router' => [
        'routes' => require __DIR__ . '/module.routes.php',
    ],
    'controllers' => [
        'factories' => [
            //
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],
    'navigation' => require __DIR__ . '/module.navigation.php',
];
