<?php

require_once 'Employee.php';
require_once 'ISalary.php';

/**
 *
 */
class Programmer extends Employee implements ISalary
{
    /**
     * @var int
     */
    protected int $experience = 3;
    /**
     * @var int
     */
    private int $hoursRecycling;
    /**
     * @var float|int
     */
    private float $moneyPerHour = 24;

    /**
     * @return int
     */
    public function salary(): int
    {
        return parent::getWorkingHours() * $this->moneyPerHour;
    }

    /**
     * @return int
     */
    public function howMuchExperience(): int
    {
        return $this->experience;
    }


}