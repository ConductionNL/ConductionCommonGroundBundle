<?php

// Conduction/CommonGroundBundle/DependencyInjection/Configuration.php

/*
 * This file is part of the Conduction Common Ground Bundle
 *
 * (c) Conduction <info@conduction.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Conduction\CommonGroundBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder('common_ground');
		
		$treeBuilder->getRootNode()
			->children()
				->arrayNode('bag')			
					->children()
						->arrayNode('cash')
							->children()
								->variableNode('nummeraanduiding')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
								->variableNode('woonplaats')
									->info('By law Dutch localities only change on January the first')
									->defaultValue('January 1st Next Year')
								->end()
								->variableNode('openbareruimte')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
								->variableNode('panden')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
								->variableNode('verblijfsobject')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
								->variableNode('ligplaatsen')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
								->variableNode('standplaatsen')
									->info('Defaults to on week')
									->defaultValue(604800000)
								->end()
							->end() // children
						->end() // cash
						->variableNode('apikey')
							->defaultValue(false)
						->end()
						->variableNode('location')						
							->defaultValue('https://bag.basisregistraties.overheid.nl/api/v1/')
						->end()
					->end() // children
				->end() // bag
				
				->arrayNode('kvk')
					->children()
						->arrayNode('cash')
							->children()
								->variableNode('nummeraanduiding')
								->end()
								->variableNode('woonplaats')
								->end()
								->variableNode('openbareruimte')->
								end()
								->variableNode('panden')->
								end()
								->variableNode('verblijfsobject')
								->end()
								->variableNode('ligplaatsen')
								->end()
								->variableNode('standplaatsen')
								->end()
							->end() // children
						->end() // cash
						->variableNode('apikey')
							->defaultValue(false)
						->end()
						->variableNode('location')
							->defaultValue('https://api.kvk.nl:443/')
						->end()
					->end() // children
				->end() // kvk
			->end() // children
		;
		
		return $treeBuilder;
	}
}