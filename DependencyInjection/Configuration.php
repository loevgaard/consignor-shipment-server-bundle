<?php

declare(strict_types=1);

namespace Loevgaard\ConsignorShipmentServerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('loevgaard_consignor_shipment_server');

        $rootNode
            ->children()
                ->scalarNode('actor')
                    ->info('The consignor actor')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('key')
                    ->info('The corresponding consignor key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
