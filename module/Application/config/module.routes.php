<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-24
 * Time: 21:56
 */
namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'home' => [
        'type' => Literal::class,
        'options' => [
            'route'    => '/',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'application' => [
        'type'    => Segment::class,
        'options' => [
            'route'    => '/application[/:action]',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
];