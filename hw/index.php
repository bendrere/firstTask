<?php

require_once 'SessionSaveHandler.php';

$pathToFile = '/var/www/php-magento-lab.loc/Session/';
$count = 1;

ini_set('session.save_path', "/var/www/php-magento-lab.loc/Session/");
ini_set('session.serialize_handler', 'php_serialize');
ini_set('session.gc_maxlifetime', 86400);



if (isset($_COOKIE["visit_count"])) {
    $visit_count = $_COOKIE["visit_count"] + 1;
}

setcookie("visit_count", $visit_count, strtotime("+30 days"));

echo($visit_count);


$firstSession = new SessionSaveHandler($pathToFile);

session_set_save_handler($firstSession, true);

session_start();

$_SESSION['foo'] = 'bar';
$_SESSION['kek'] = 'shmeck';
$_SESSION['wow'] = 'cow';

session_write_close();

