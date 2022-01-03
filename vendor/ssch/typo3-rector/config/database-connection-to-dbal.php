<?php

declare (strict_types=1);
namespace RectorPrefix20220103;

use Ssch\TYPO3Rector\Rector\v9\v0\DatabaseConnectionToDbalRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/config.php');
    $services = $containerConfigurator->services();
    $services->set(\Ssch\TYPO3Rector\Rector\v9\v0\DatabaseConnectionToDbalRector::class);
};
