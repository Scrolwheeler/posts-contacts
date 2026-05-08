<?php

namespace App\Models;

class Event
{
    public $name;
    public $date;

    public function __construct($name, $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public static function create($name, $date)
    {
        return new self($name, $date);
    }
}