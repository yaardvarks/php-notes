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
    }
}

$switch = new lightSwitch();
$switch->connect();
