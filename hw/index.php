<?php

require_once 'SessionSaveHandler.php';

$pathToFile = '/var/www/php-magento-lab.loc/Session/';
$count = 1;

ini_set('session.save_path', "/var/www/php-magento-lab.loc/Session/");
ini_set('session.serialize_handler', 'php_serialize');
ini_set('session.gc_maxlifetime', 86400);



if (isset($_COOKIE["updateCount"])) {
    $count = $_COOKIE["updateCount"] + 1;
}

setcookie("updateCount", $count, strtotime("+1 hour"));

echo($count);


$firstSession = new SessionSaveHandler($pathToFile);

session_set_save_handler($firstSession, true);

session_start();

$_SESSION['foo'] = 'bar';
$_SESSION['kek'] = 'shmeck';
$_SESSION['wow'] = 'cow';

session_write_close();

