<?php


interface IFormulas //interface segregation
{
    /**
     * @param $figure
     * @param $length
     * @return mixed
     */
    public function area($figure, $length);

    /**
     * @param $figure
     * @param $length
     * @return mixed
     */
    public function perimeter($figure, $length);

    /**
     * @param $figure
     * @param $length
     * @return mixed
     */
    public function volume($figure, $length);

    /**
     * @return mixed
     */
    public function getNameOfFigure();
}