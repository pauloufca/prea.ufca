<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . '/../model1' . $uri;
if (php_sapi_name()==='cli-server' && is_file($file)) {
  return false;
}
require __DIR__ . '/../model1/index.php';
