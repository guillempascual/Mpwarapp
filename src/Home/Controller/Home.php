<?php

namespace Mpwarapp\Home\Controller;


use Mpwarfw\Component\Controller\ContainerController;

class Home extends ContainerController
{
    public function index()
    {
        $template = $this->container->getService('SmartyTemplate');
        $html = $template->render('smarty/home.tpl', array());

        $response = $this->container->getService('ResponseHTTP');
        $response->setContentType('text\html');
        $response->setStatus(200);
        $response->setContent($html);
        return $response;

    }

}
