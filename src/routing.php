<?php

use App\Controller\GameController;

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = new GameController();
if ('/' === $urlPath) {
    $controller->browse();
} elseif ('/games' === $urlPath) {
    $controller->show($_GET['id']);
} else {
    // TODO 404
}
