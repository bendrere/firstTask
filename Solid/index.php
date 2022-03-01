<?php

require_once 'SquareArea.php';


$path = '/var/www/php-magento-lab.loc/SolidHW/';

$lol = new Calculator($path, 'sphere', 4);

$lol->write();
