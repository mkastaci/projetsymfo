<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZysVkbH' shared service.

return $this->privates['.service_locator.ZysVkbH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repoplat' => ['privates', 'App\\Repository\\PlatsRepository', 'getPlatsRepositoryService.php', true],
], [
    'repoplat' => 'App\\Repository\\PlatsRepository',
]);
