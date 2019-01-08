<?php 

/* For Creating templates but not usable */
abstract class family
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }
}

class Mother
{
    public function getEyeCount()
    {
        return 2;
        error
    }
}

class Child extends Mother
{
}

class secondChild extends family
{
    public function getEyeCount()
    {
        return 4;
    }
}

$person = new Child();

echo $person->getEyeCount();


$overide = new secondChild();

echo $overide->getEyeCount();
