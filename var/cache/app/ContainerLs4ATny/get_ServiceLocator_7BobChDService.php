<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.7BobChD' shared service.

return $this->privates['.service_locator.7BobChD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repoprojet' => ['privates', 'App\\Repository\\ProjetRepository', 'getProjetRepositoryService.php', true],
], [
    'repoprojet' => 'App\\Repository\\ProjetRepository',
]);
