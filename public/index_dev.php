<?php

error_reporting(-1);
ini_set("display_errors", "true");

use Mpwarfw\Component\Bootstrap\Bootstrap;
use Mpwarfw\Component\Request\Request;

require_once  __DIR__ . '/../vendor/autoload.php';
require_once  __DIR__ . '/../app/constants.php';


$parser = new \Symfony\Component\Yaml\Parser();
$bootstrap = new Bootstrap($parser,APP_PATH,'DEV');

$request = Request::create();
$response = $bootstrap->execute($request);
$response->send();