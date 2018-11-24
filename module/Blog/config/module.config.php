<?php

namespace Blog;

return [
    'service_manager' => [
        'aliases' => [
            Model\PostRepositoryInterface::class => Model\PostRepository::class,
        ],
        'factories' => [
            Model\PostRepository::class => Factory\PostRepositoryFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => Factory\IndexControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => require __DIR__ . '/module.routes.php',
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Blog' => __DIR__ . '/../view',
        ],
    ],
];
