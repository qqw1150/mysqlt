<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader->registerNamespaces([
    "app\models" => APP_PATH . '/models/'
])->register();
