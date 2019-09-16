<?php

namespace AngryException;

use Throwable;

class AngryException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        if(!$message) {
            $cries = (json_decode(file_get_contents('dirt.json')))->cries;
            $message = "\033[1m\033[31m ".$cries[rand(0, count($cries) - 1)]." \033[0m";
        }

        parent::__construct($message, $code, $previous);
    }
}
