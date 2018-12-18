<?php


class Task{

    public $description;

    protected $completed = false;

    public function __construct($description)
    {
            $this->description = $description;
    }

    public function complete()
    {
        return $this->completed=true;
    }


    public function isComplete()
        {
            return $this->completed;
        }

}

$task = [ 
        new Task('Go to the store'),
        new Task('Finish my screencast'),
        new Task('clean my room')

];

require 'index.view.php';