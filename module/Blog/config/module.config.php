<?php
namespace Blog;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'aliases' => [
            Model\PostRepositoryInterface::class => Model\PostRepository::class,
        ],
        'factories' => [
            Model\PostRepository::class => InvokableFactory::class,
        ],
    ],
    'controllers' => [
        'factories' => [
            // Update the following line:
            Controller\ListController::class => Factory\ListControllerFactory::class,
        ],
    ],
    // This lines opens the configuration for the RouteManager
    'router' => [
        // Open configuration for all possible routes
        'routes' => require __DIR__ . '/module.routes.php',
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];