<?php


class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age > 18) {
            $this->age = $age;
        } else {
            throw new Exception("Person is not old enough");
        }
    }

    public function getAge()
    {
        return ($this->age*365);
    }
}

$john = new Person('John Bloggs');
$john->setAge(33);

var_dump($john);

echo $john->getAge();
