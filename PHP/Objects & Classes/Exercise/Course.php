<?php
namespace Exercise;


class Course {

    private static $idCounter = 1;
    public readonly int $id;
    public $name;

    public function __construct($name) {
        $this->id = self::$idCounter++;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}



