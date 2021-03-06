<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.FdZmTmc' shared service.

return $this->privates['.service_locator.FdZmTmc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repoplat' => ['privates', 'App\\Repository\\PlatsRepository', 'getPlatsRepositoryService.php', true],
    'repotype' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService.php', true],
], [
    'repoplat' => 'App\\Repository\\PlatsRepository',
    'repotype' => 'App\\Repository\\TypeRepository',
]);
