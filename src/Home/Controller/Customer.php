<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Controller\ContainerController;

class Customer extends ContainerController 
{
    public function showCustomerListJSON()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());
        $response = $this->container->getService('ResponseJSON');
        $response->setResponse($all_customers);
        return $response;
    }

    public function showCustomerListTwig()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('TwigTemplate');
        $html = $templating->render('showAllCustomers.twig', array('title' => "All Customers in Twig", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }

    public function showCustomerListSmarty()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('SmartyTemplate');
        $html = $templating->render('showAllCustomers.tpl', array('title' => "All Customers in Smarty", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }

    public function show($id)
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $customer = $pdoConnection->execute('SELECT * FROM customer WHERE id  = :id', array(':id' => $id));

        $templating = $this->container->getService('TwigTemplate');
        $html = $templating->render('showCustomer.twig', array('title' => "Show Customer", 'id' => $id, 'customer' => $customer));

        $response = $this->container->getService('ResponseHTTP');
        $response->setResponse($html);
        return $response;
    }
}