<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.v9qO.vD' shared service.

return $this->privates['.service_locator.v9qO.vD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'employers' => ['privates', '.errored..service_locator.v9qO.vD.App\\Entity\\Employer', NULL, 'Cannot autowire service ".service_locator.v9qO.vD": it references class "App\\Entity\\Employer" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'employers' => 'App\\Entity\\Employer',
    'manager' => '?',
]);
