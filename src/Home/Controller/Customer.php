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
        $response->setContent($all_customers);
        return $response;
    }

    public function showCustomerListTwig()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('TwigTemplate');
        $html = $templating->render('twig/showAllCustomers.twig', array('title' => "All Customers in Twig", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setContentType('text\html');
        $response->setStatus(200);
        $response->setContent($html);
        return $response;
    }

    public function showCustomerListSmarty()
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = $this->container->getService('SmartyTemplate');
        $html = $templating->render('smarty/showAllCustomers.tpl', array('title' => "All Customers in Smarty", 'all_customers' => $all_customers));

        $response = $this->container->getService('ResponseHTTP');
        $response->setContentType('text\html');
        $response->setStatus(200);
        $response->setContent($html);
        return $response;
    }

    public function show($id)
    {
        $pdoConnection = $this->container->getService('PDOConnection');
        $customer = $pdoConnection->execute('SELECT * FROM customer WHERE id  = :id', array(':id' => $id));

        $templating = $this->container->getService('TwigTemplate');
        $response = $this->container->getService('ResponseHTTP');

        if(isset($customer[0])){
            $html = $templating->render('twig/showCustomer.twig', array('title' => "Show Customer", 'id' => $id, 'customer' => $customer[0]));
            $response->setContentType('text\html');
            $response->setStatus(200);
            $response->setContent($html);
         }
        else{
            $html = $templating->render('twig/showCustomerErrorDoesNotExist.twig', array('title' => "Customer Error", 'id' => $id));
            $response->setContentType('text\html');
            $response->setStatus(403);
            $response->setContent($html); 
        }

       return $response;
    }
}