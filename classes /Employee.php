<?php

require_once 'MyTrait.php';

/**
 *
 */
abstract class Employee
{
    use MyTrait;

    /**
     *
     */
    private const WORKING_HOURS = 8;

    /**
     * @var bool
     */
    public static bool $isHoliday = false;

    /**
     * @var float
     */
    private float $moneyPerHour;

    /**
     * @var int
     */
    protected int $experience;

    /**
     * @var bool
     */
    private bool $vacation = true;

    /**
     * @var int
     */
    private int $age;

    /**
     * @param $property
     * @return bool|int|void
     */
    public function __get($property)
    {
        switch ($property) {
            case 'vacation':
                return $this->vacation;
            case 'age':
                return $this->age;
        }
    }

    /**
     * @param $property
     * @param $value
     * @return void
     */
    public function __set($property, $value)
    {
        switch ($property) {
            case 'vacation':
                $this->vacation = $value;
                break;
            case 'age':
                $this->age = $value;
                break;
        }
    }

    /**
     * @return int
     */
    public function getWorkingHours()
    {
        return self::WORKING_HOURS;

    }

    abstract public function howMuchExperience(): int;
}