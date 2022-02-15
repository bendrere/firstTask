<?php

/**
 *
 */
trait MyTrait
{

    /**
     * @return string
     */
    public function whoIsIt()
    {
        return get_class($this);
    }


    /**
     * @param $time
     * @return void
     * @throws FirstException
     */
    public static function whatTimeIs($time)
    {
        if ($time > 8 and $time < 16) {
            echo('It is work time');
        } elseif ($time < 0 or $time > 24) {
            throw new FirstException($time);
        } else {
            echo('Go home');
        }
    }
}

