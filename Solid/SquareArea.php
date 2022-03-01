<?php

require_once 'DirFuncktions.php';

class SquareArea extends Calculator //Liskov substition
{
    /**
     * @var string
     */
    public string $NameOfFigure;

    /**
     * @return string|void
     */
    public function getNameOfFigure()
    {
        echo parent::getNameOfFigure();
        $this->NameOfFigure = parent::getNameOfFigure();
    }

    /**
     * @param $length
     * @param $high
     * @return void
     */
    public function parallelogramArea($length, $high)
    {
        if ($this->NameOfFigure === 'Parallelogram') {
            echo $length * $high;
        }
    }
}