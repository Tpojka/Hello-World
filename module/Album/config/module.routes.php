<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-24
 * Time: 18:02
 */

namespace Album;

use Zend\Router\Http\Segment;

return [
    'album' => [
        'type'    => Segment::class,
        'options' => [
            'route' => '/album[/:action[/:id]]',
            'constraints' => [
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id'     => '[0-9]+',
            ],
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
];