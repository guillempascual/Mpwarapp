<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Database\PDOConnection;
use Mpwarfw\Component\Response\ResponseHTTP;
use Mpwarfw\Component\Response\ResponseJSON;
use Mpwarfw\Component\Template\SmartyTemplate;
use Mpwarfw\Component\Template\TwigTemplate;

class Customer extends DefaultController
{
    public function show()
    {
        $result = ['vino rioja' => ['s' => 'ffff', 'd' => 'kjdsffdj']];

        $response = new ResponseJSON();
        $response->setResponse($result);
        return $response;
    }

    public function show_all()
    {
        $pdoConnection = new PDOConnection(HOST,DBNAME,USER,PASSWORD);
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = new TwigTemplate(VIEW_PATH);
        $html = $templating->createView('showAll', array('title' => "All Customers", 'all_customers' => $all_customers));

        $response = new ResponseHTTP();
        $response->setResponse($html);
        return $response;
    }

    public function show_vip_all()
    {
        $pdoConnection = new PDOConnection(HOST,DBNAME,USER,PASSWORD);
        $all_customers = $pdoConnection->execute("SELECT * FROM customer", array());

        $templating = new SmartyTemplate(VIEW_PATH);
        $html = $templating->createView('showAll', array('title' => "VIP Customers", 'all_customers' => $all_customers));

        $response = new ResponseHTTP();
        $response->setResponse($html);
        return $response;
    }
}