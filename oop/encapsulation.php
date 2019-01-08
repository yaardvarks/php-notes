<?php

class lightSwitch
{
    public function on()
    {
    }

    /* Can be inherited when extending classes */
    protected function off()
    {
    }

    /* Will not be inherited when extending classes */
    private function connect()
    {
        var_dump("Hello");
    }
}

$switch = new lightSwitch();
$switch->connect();
