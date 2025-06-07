<?php
// model1/index.php
require_once __DIR__ . '/controllers/HomeController.php';
$controller = new HomeController();
$controller->render();

