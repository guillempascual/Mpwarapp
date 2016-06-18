<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Controller\ContainerController;

class Customer extends ContainerController 
{
    public function show()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());
        $response = $this->container->getService('ResponseJSON');
        $response->setResponse($all_customers);
        return $response;
    }

    public function show_all()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('TwigTemplate');
        $html = $templating->render('showAll', array('title' => "All Customers", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }

    public function show_vip_all()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('SmartyTemplate');
        $html = $templating->render('showAll', array('title' => "VIP Customers", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }
}