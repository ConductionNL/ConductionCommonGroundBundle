<?php
// App/Conduction/CommonGroundBundle/Validator/Constraints/BurgerServiceNummer.php

/*
 * This file is part of the Conduction Common Ground Bundle
 *
 * (c) Conduction <info@conduction.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace App\Conduction\CommonGroundBundle\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class BurgerServiceNummer extends Constraint
{
	public $message = 'The integer "{{ integer }}" is not a valid Dutch Burger Service Nummer (BSN).';
	
	// in the base Symfony\Component\Validator\Constraint class
	public function validatedBy()
	{
		return \get_class($this).'Validator';
	}
}
