<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-25
 * Time: 15:38
 */

use Zend\Paginator\ConfigProvider;

return [
    'service_manager' => (new ConfigProvider())->getDependencyConfig(),
];