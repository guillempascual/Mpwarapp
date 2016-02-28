<?php

namespace Mpwarapp\Home\Controller;

class Customer extends DefaultController
{
    public function show()
    {
        $pdoConnection = $this->getServicesContainer('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());
        $response = $this->getServicesContainer('ResponseJSON');
        $response->setResponse($all_customers);
        return $response;
    }

    public function show_all()
    {
        $pdoConnection = $this->getServicesContainer('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->getServicesContainer('TwigTemplate');
        $html = $templating->createView('showAll', array('title' => "All Customers", 'all_customers' => $all_customers));

        $response = $this->getServicesContainer('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }

    public function show_vip_all()
    {
        $pdoConnection = $this->getServicesContainer('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->getServicesContainer('SmartyTemplate');
        $html = $templating->createView('showAll', array('title' => "VIP Customers", 'all_customers' => $all_customers));

        $response = $this->getServicesContainer('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }
}