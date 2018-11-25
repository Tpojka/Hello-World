<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-25
 * Time: 15:11
 */

use Zend\Navigation\ConfigProvider;

return [
    'service_manager' => (new ConfigProvider())->getDependencyConfig(),
];