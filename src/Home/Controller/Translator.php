<?php

namespace Mpwarapp\Home\Controller;

use Mpwarfw\Component\Controller\ContainerController;

class Translator extends ContainerController
{
   public function translate($lang)
    {
        $validLangs = ['es', 'fr'];

        $response = $this->container->getService('ResponseHTTP');
        $template = $this->container->getService('SmartyTemplate');

        if (in_array($lang, $validLangs)) {
            $translator = $this->container->getService('Translator');
            $translator->setTranslationsFile("../app/i18n/$lang.yml");
            $translations = [
                "Hello World!" => $translator->translate("Hello World!"),
                "This is a test" => $translator->translate("This is a test")
            ];
            $html = $template->render('smarty/translator.tpl', array('title' => "i18n", 'lang' => $lang, 'translations' => $translations));
            $response->setContentType('text\html; charset=utf-8');
            $response->setStatus(200);
            $response->setContent($html);
            return $response;
        }
        $html = $template->render('smarty/translator.tpl', array('title' => "i18n", 'validLangs' => $validLangs ));
        $response->setContentType('text\html; charset=utf-8');
        $response->setContent($html);
        $response->setStatus(404 );
        return $response;
    }
}
