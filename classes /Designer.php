<?php

require_once 'Employee.php';
require_once 'ISalary.php';

/**
 *
 */
class Designer extends Employee implements ISalary
{

    /**
     * @var int
     */
    protected int $experience = 10;

    /**
     * @var float|int
     */
    private float $moneyPerHour = 23;

    /**
     * @return int
     */
    public function salary(): int
    {
        $hours = parent::getWorkingHours();
        return $hours * $this->moneyPerHour;
    }

    /**
     * @return int
     */
    public function howMuchExperience(): int
    {
        return $this->experience;
    }


}