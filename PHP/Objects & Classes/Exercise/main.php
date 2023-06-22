<?php

use Exercise\Course;
use Exercise\Manager;

require 'Student.php';
require 'Course.php';
require_once 'Manager.php';

$manager = new Manager();

// Add students
$manager->addStudent( "Abeer", "abeer@gmail.com");
$manager->addStudent( "Tasneem", "Tasneem@gmail.com");
$manager->addStudent( "Basant", "Basant@gmail.com");

// Add courses
$course1 = new Course( "PHP");
$course2 = new Course( "Java");


// Retrieve student by id
$id = 1;
$student = $manager->getStudentById($id);
if ($student) {
    // Add courses to the student
    $student->addCourse($course1);
    $student->addCourse(new Course( "Laravel"));
    $student->addCourse($course2);

    echo  "Student Information:\n  ID: " . $student->getID() .
          "\n Student name: " . $student->getName() .
          "\n Email: " . $student->getEmail() .
          "\n Courses :\n ";
    foreach ($student->getCourses() as $course) {
        echo "  -  " . $course->getName() . "\n";
    }
    echo "--------------------- \n";

}else{
    echo  "Student with $id not Found \n --------------------- \n";
}

// Update student details
$manager->updateStudent(1, "Abeer", "abeer2@gmail.com");

// Delete student
$manager->deleteStudent(2);

// Retrieve student by id to deleted student
$student = $manager->getStudentById(2);

if ($student) {
    // Add courses to the student
    $student->addCourse($course1);
    $student->addCourse(new Course( "Laravel"));
    $student->addCourse($course2);

    echo  "Student Information:\n  ID: " . $student->getID() .
        "\n Student name: " . $student->getName() .
        "\n Email: " . $student->getEmail() .
        "\n Courses :\n ";
    foreach ($student->getCourses() as $course) {
        echo "  -  " . $course->getName() . "\n";
    }
    echo "--------------------- \n";
}else{
    echo  'Student not Found' ."\n --------------------- \n";
}