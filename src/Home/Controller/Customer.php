<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Response\ResponseHTTP;
use Mpwarfw\Component\Response\ResponseJSON;
use Mpwarfw\Component\Template\TwigTemplate;

class Customer extends DefaultController
{
    public function show()
    {
        $result = ['vino rioja' => ['s'=>'ffff','d'=>'kjdsffdj']];

        $response = new ResponseJSON();
        $response->setResponse($result);
        return $response;
    }
        public function show_all()
    {
        $all_customers = array('Alex', 'Guillem', 'Heidi', 'María', 'Laura');

        $templating = new TwigTemplate(self::VIEW_PATH);
        $html = $templating->createView('showAll',array('all_customers' => $all_customers));

        $response = new ResponseHTTP();
        $response->setResponse($html);
        return $response;
    }
}