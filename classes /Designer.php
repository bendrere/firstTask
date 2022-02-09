<?php

require_once 'Employee.php';
require_once 'ISalary.php';

class Designer extends Employee implements ISalary
{

    protected int $experience = 10;

    private float $moneyPerHour = 23;

    public function salary(): int{
        $hours = parent::getWorkingHours();
        return $hours * $this->moneyPerHour;
    }

    public function howMuchExperience(): int
    {
        return $this->experience;
    }


}