<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$site    = new Site('pages', $request);
$pages   = $site->getPages();
$current = $site->getCurrent();

$response = new Response();

if ($current) {
    ob_start();
    include('template.php');
    $data = ob_get_clean();
    $response->setContent($data);
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();
