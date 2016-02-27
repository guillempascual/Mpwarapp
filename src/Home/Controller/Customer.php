<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Response\ResponseHTTP;
use Mpwarfw\Component\Response\ResponseJSON;

class Customer extends BaseController
{
    public function show($request)
    {
        $result = ['vino rioja' => ['s'=>'ffff','d'=>'kjdsffdj']];

        $response = new ResponseJSON();
        $response->setResponse($result);
        return $response;
    }
        public function executeActionHTTP($request)
    {
        $result = 'vino rioja';

        $response = new ResponseHTTP();
        $response->setResponse($result);
        return $response;
    }
}