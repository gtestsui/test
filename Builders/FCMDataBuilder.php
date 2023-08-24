<?php

namespace App\Notifications\Builders;

class FCMDataBuilder
{
    public function __call($name, $args)
    {
        $this->$name = $args[0];
    }
}
