<?php

require '../vendor/autoload.php';
require '../config.php';

use Api\Core\Controller\MagasinController;

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$magasinController = new MagasinController;

switch ($requestUri) {
    case '/public/index.php/magasins':
        if ($requestMethod == 'GET') {
            $magasinController->listMagasins();
        } elseif ($requestMethod == 'POST') {
            $magasinController->createMagasin($_REQUEST);
        }
        break;
    case preg_match('/\/magasins\/\d+/', $requestUri) ? true : false:
        $id = basename($requestUri);
        dd($_SERVER);
        die;
        if ($requestMethod == 'GET') {
            $magasinController->getMagasin($id);
        } elseif ($requestMethod == 'PUT') {
            $magasinController->updateMagasin($id, $_REQUEST);
        } elseif ($requestMethod == 'DELETE') {
            $magasinController->deleteMagasin($id);
        }
        break;
    default:
        http_response_code(404);
        echo json_encode(['message' => 'Route not found']);
        break;
}
