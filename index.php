<?php
require_once 'classes /Programmer.php';
require_once 'classes /Designer.php';
require_once 'classes /Manager.php';

$newEmployee = new Programmer();

echo  $newEmployee->getWorkingHours();
echo $newEmployee->whoIsIt();
$newEmployee->age = 18;
echo $newEmployee->age;
echo $newEmployee->howMuchExperience();

$newEmployee2 = new Manager();

echo $newEmployee2->howMuchExperience();

try{
    $newEmployee::whatTimeIs(6);
}
catch (FirstException $ex)
{
    echo $ex->getMessage();
}



