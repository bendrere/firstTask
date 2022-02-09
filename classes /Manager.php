<?php

require_once 'Employee.php';
require_once 'ISalary.php';

class Manager extends Employee implements ISalary
{
    protected int $experience = 9;

    private float $moneyPerHour = 24;

    public function salary(): int
    {
        $hours = parent::getWorkingHours();
        return $hours * $this->moneyPerHour;
    }

    public function howMuchExperience(): int
    {
        return $this->experience;
    }


}