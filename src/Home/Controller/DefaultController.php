<?php

namespace Mpwarapp\Home\Controller;

abstract class DefaultController
{
    private $servicesContainer;
    public function __construct(){}

    public function setServicesContainer($servicesContainer)
    {
        $this->servicesContainer = $servicesContainer;
    }

    public function getServicesContainer($service)
    {
        return $this->servicesContainer[$service];
    }
}