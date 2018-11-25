<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-24
 * Time: 23:09
 */

namespace Album\Factory;

use Album\Model\Album;
use Album\Model\AlbumRepository;
use Zend\Db\Adapter\AdapterInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Hydrator\Reflection as ReflectionHydrator;

class AlbumRepositoryFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new AlbumRepository(
            $container->get(AdapterInterface::class),
            new ReflectionHydrator(),
            new Album('', '')
        );
    }
}