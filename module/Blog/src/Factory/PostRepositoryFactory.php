<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-23
 * Time: 16:01
 */

namespace Blog\Factory;

use Blog\Model\Post;
use Blog\Model\PostRepository;
use Zend\Db\Adapter\AdapterInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Hydrator\Reflection as ReflectionHydrator;

class PostRepositoryFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new PostRepository(
            $container->get(AdapterInterface::class),
            new ReflectionHydrator(),
            new Post('', '')
        );
    }
}