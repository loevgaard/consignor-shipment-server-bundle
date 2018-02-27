<?php

declare(strict_types=1);

namespace Loevgaard\DandomainStockBundle\Tests\DependencyInjection;

use Loevgaard\ConsignorShipmentServerBundle\DependencyInjection\LoevgaardConsignorShipmentServerExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Parser;

class LoevgaardConsignorShipmentServerExtensionTest extends TestCase
{
    public function testThrowsExceptionUnlessAltapayUsernameSet()
    {
        $this->expectException(InvalidConfigurationException::class);

        $loader = new LoevgaardConsignorShipmentServerExtension();
        $config = $this->getEmptyConfig();
        unset($config['actor']);
        $loader->load([$config], new ContainerBuilder());
    }

    public function testGettersSetters()
    {
        $loader = new LoevgaardConsignorShipmentServerExtension();
        $config = $this->getEmptyConfig();
        $container = new ContainerBuilder();
        $loader->load([$config], $container);

        $this->assertSame($config['actor'], $container->getParameter('loevgaard_consignor_shipment_server.actor'));
        $this->assertSame($config['key'], $container->getParameter('loevgaard_consignor_shipment_server.key'));
    }

    /**
     * @return array
     */
    protected function getEmptyConfig()
    {
        $yaml = <<<EOF
actor: actor
key: key
EOF;
        $parser = new Parser();

        return $parser->parse($yaml);
    }
}
