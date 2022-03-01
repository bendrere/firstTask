<?php

require_once 'SessionSaveHandler.php';

$pathToFile = '/var/www/php-magento-lab.loc/Session/';

$countNew = 1;

ini_set('session.save_path', "/var/www/php-magento-lab.loc/Session/");
ini_set('session.serialize_handler', 'php_serialize');
ini_set('session.gc_maxlifetime', 86400);
ini_set('session.name', 'sesid');


if (isset($_COOKIE["visitCount"])) {
    $countNew = $_COOKIE["visitCount"] + 1;
}

setcookie("visitCount", $countNew, time() + 2);

echo($countNew);


$firstSession = new SessionSaveHandler($pathToFile);

session_set_save_handler($firstSession, true);

session_start();

$_SESSION['foo'] = 'bar';
$_SESSION['one'] = 'car';
$_SESSION['two'] = 'window';
$_SESSION['lol'] = 'what';

session_write_close();


