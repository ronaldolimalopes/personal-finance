<?php
namespace PersonFin\Plugins;

use PersonFin\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);
}