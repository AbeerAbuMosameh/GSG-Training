<?php

namespace Exercise;
use Exercise\Student;

trait Loggable {

    public function log($message) {
        $logFile = "log.txt";
        $timestamp = date("Y-m-d H:i:s");
        $logMessage = "[$timestamp] $message \n";
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
}

class Manager {

    use Loggable;

    public $students;

    public function __construct() {
        $this->students = array();
    }


    public function addStudent($name, $email) {
        $student = new Student($name, $email);
        $id = $student->getId();
        $this->students[$id] = $student;
        $this->log("Added student: \n ID : " . $id . ", Name : " . $student->getName());

    }

    public function getStudentById($id) {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }
        return null;
    }

    public function updateStudent($id, $name, $email) {
        if (isset($this->students[$id])) {
            $existingStudent = $this->students[$id];
            $existingStudent->name = $name;
            $existingStudent->email = $email;
            $this->log("Updated student: \n ID : " . $id . ", Name : " . $name);
        }
    }

    public function deleteStudent($id) {
        if (isset($this->students[$id])) {
            unset($this->students[$id]);
            $this->log("Deleted student: \n ID : " .$id );

        }
    }
}