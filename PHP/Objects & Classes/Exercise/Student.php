<?php

namespace Exercise;

class Student {

    private static $idCounter = 1;
    public readonly int $id;
    public $name;
    public $email;
    public $courses;

    public function __construct($name, $email) {
        $this->id = self::$idCounter++;
        $this->name = $name;
        $this->email = $email;
        $this->courses = array();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCourses() {
        return $this->courses;
    }

    public function addCourse($course) {
        $this->courses[] = $course;
    }

}
