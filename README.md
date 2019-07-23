# ConductionCommonGroundBundle
This bundle adds VNG Common Ground functionality to you Symfony API Platforapplication.

**Requires**: PHP 5.3+ or PHP 7.0+

**Lead Developer**: [@rubenlinde](http://twitter.com/rubenlinde)

**Original Author**: [@conduction_nl](http://twitter.com/conduction_nl)

## Installation

Symfony flex aproval for this bundle is still underway so right now it needs to be installed manually trough composer (without flex)

``` CLI
composer require conduction/commongroundbundle
```

Afther installation active the bundle by adding it to config/bundles.php of your symfony installation

``` PHP
return [
    ...
	Conduction\CommonGroundBundle\CommonGroundBundle::class => ['all' => true],
];
```

Aditionaly you will need to copy the parameter file conduction_common_ground.yaml (from resources/config) to config/packages folder of your application


## Commonground

Common ground is a Dutch governmental initiative exploring the posibilaties of using open source, and rest api's as a backbone for governement and public architecture