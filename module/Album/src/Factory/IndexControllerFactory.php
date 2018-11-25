<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-23
 * Time: 14:55
 */

namespace Album\Factory;

use Album\Controller\IndexController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return IndexController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new IndexController();
    }
}