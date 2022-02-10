<?php

class FirstException extends Exception
{
    /**
     * @param $value
     */
    public function __construct($value)
    {
        parent::__construct($message = "", $code = 0, $previous = null);
        $this->message = 'Неверное время';
    }
}
