<?php

require_once 'Employee.php';
require_once 'ISalary.php';

class Programmer extends Employee implements ISalary
{
    protected int $experience = 3;
    private int $hoursRecycling;
    private float $moneyPerHour = 24;

    public function salary(): int
    {
        return parent::getWorkingHours() * $this->moneyPerHour;
    }

    public function howMuchExperience(): int
    {
        return $this->experience;
    }


}