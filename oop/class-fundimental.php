<?php

class Task
{
    public $description = 'go to the store';

    public function __construct($desc)
    {
        $this->description = $desc
    }
}

$task = new Task('OOP');

var_dump($task->description);
