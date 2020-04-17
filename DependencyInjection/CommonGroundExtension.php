<?php

// Conduction/CommonGroundBundle/DependencyInjection/ConductionCommonGroundExtension.php

/*
 * This file is part of the Conduction Common Ground Bundle
 *
 * (c) Conduction <info@conduction.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Conduction\CommonGroundBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class CommonGroundExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container)
	{
		// Loading the services
		/*
		$loader = new YamlFileLoader(
				$container,
				new FileLocator(__DIR__.'/../Resources/config')
				);

		$loader->load('conduction_common_ground.yaml');
		
		// Loading the configurations


		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);

		// This is the KEY TO YOUR ANSWER
		$container->setParameter( 'conduction.commonground.brp.location', $config['bag']['location']);
		$container->setParameter( 'conduction.commonground.brp.apikey', $config['bag']['apikey']);
		*/
	}
}
