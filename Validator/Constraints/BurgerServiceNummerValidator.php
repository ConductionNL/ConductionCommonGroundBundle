<?php
// App/Conduction/CommonGroundBundle/Validator/Constraints/BurgerServiceNummerValidator.php

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
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class BurgerServiceNummerValidator extends ConstraintValidator
{
	public function validate($value, Constraint $constraint)
	{
		if (!$constraint instanceof BurgerServiceNummer) {
			throw new UnexpectedTypeException($constraint, ContainsAlphanumeric::class);
		}
		
		// custom constraints should ignore null and empty values to allow
		// other constraints (NotBlank, NotNull, etc.) take care of that
		if (null === $value || '' === $value) {
			return;
		}
		
		if (!is_numeric($value)) {
			// throw this exception if your validator cannot handle the passed type so that it can be marked as invalid
			throw new UnexpectedValueException($value, 'integer');
			
			// separate multiple types using pipes
			// throw new UnexpectedValueException($value, 'string|int');
		}
		
		if (!$this->check11($value)) {
			$this->context->buildViolation($constraint->message)
			->setParameter('{{ integer }}', $value)
			->addViolation();
		}
	}
	
	// The "11 proef" a rule of thumb that dutch burgerservicenumber's should adhere to
	function check11(int $bsn){
		$csom = 0;                            	// variabele initialiseren
		$pos = 9;               
		// het aantal posities waaruit een BSN hoort te bestaan
		for ($i = 0; $i < strlen($bsn); $i++){
			$num = substr($bsn,$i,1);       	// bekijk elk karakter van de ingevoerde string
			if ($pos!=1){           // controleer of het karakter numeriek is
				$csom += $num * $pos;           // bereken somproduct van het cijfer en diens positie
				$pos--;                         // naar de volgende positie
			}
			else{       // controleer of het karakter numeriek is
				$csom += $num * -$pos;           // bereken somproduct van het cijfer en diens positie
				$pos--;     				
			}
		}
		$result = $csom / 11;                    // devide the sum trough 11.
		return is_integer($result);  			  // True als de restwaarde=0 zonder resterende posities
	}
}
