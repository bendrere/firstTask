<?php

require_once 'Iformulas.php';
require_once 'SquareArea.php';

class Calculator implements IFormulas //single responsibility
{
    /**
     * @var string
     */
    public string $dir;
    /**
     * @var string
     */
    public string $figure;
    /**
     * @var int
     */
    public int $length;
    /**
     * @var int
     */
    public int $high = 5;

    /**
     * @param $path
     * @param $figure
     * @param $length
     */
    public function __construct($path, $figure, $length)
    {
        $this->dir = $path;
        $this->figure = $figure;
        $this->length = $length;
    }


    /**
     * @param $figure
     * @param $length
     * @return void
     */
    public function area($figure, $length) // open-closed
    {
        switch ($figure) {
            case 'circle':
                echo 3.14 * $length ** 2;
                break;
            case 'square':
                echo $length ** 2;
                break;
        }
    }


    /**
     * @param $figure
     * @param $length
     * @return void
     */
    public function perimeter($figure, $length)
    {
        switch ($figure) {
            case 'circle':
                echo 3.14 * $length * 2;
                break;
            case 'square':
                echo $length * 4;
                break;
        }
    }


    /**
     * @param $figure
     * @param $length
     * @return void
     */
    public function volume($figure, $length)
    {
        switch ($figure) {
            case 'cylinder':
                echo 3.14 * $this->high * $length ** 2;
                break;
            case 'sphere':
                echo $length ** 2 * 3.14 * 4 / 3;
                break;
        }
    }

    /**
     * @return string
     */
    public function getNameOfFigure()
    {
        return $this->figure;
    }

    //dependency inversion

    /**
     * @param SquareArea $squareArea
     * @return void
     */
    public function parallelogram(SquareArea $squareArea)
    {
        $squareArea->parallelogramArea($this->length, $this->high);
    }


    /**
     * @return void
     */
    public function write()
    {
        if (!is_dir($this->dir)) {
            mkdir($this->dir, 0777, true);
        }
        file_put_contents("$this->dir/calc.txt", "$this->figure");
    }

}

