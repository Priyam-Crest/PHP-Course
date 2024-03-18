/*
Given student's names along with the grade that they arein ,create a roster for the school.
in the end you should be able to:
-Add a student's name to the roster for a grade
  -"add Jim to grade 2"
  -"OK"
-Get a list of all students enrolled in a grade 
  -"which students are in grade 2 ?"
  -"We've only got Jim just now."
-Get a sorted list of all students in all grades. Grades should sort as 1,2,3,etc. and students within a grade should be sorted alphabetically by name.
  -"Who all is enrolled in school right now ?"
  -"Let me think. We have Anna, Barb and Charlie in grade 1, Alex, Peter, and Zoe in grade 2 and Jim in grade 5, So the answer is: Anna, Barb, Charlie, Alex, Peter, Zoe and Jim"
Note, that all our students only have one name.
*/

<?php

// declare(strict_types= 1);

class School{

  private $students = [];

  public function add(string $name, int $grade) : void
  {
    $this->students[$grade][] = $name;
  }

  public function grade($grade): array
  {
    echo "Here are the students of Grade : {$grade}.\n";
    return $this->students[$grade] ?? [];
  }

  public function studentByGradeAlphbetical() : array
  {
    ksort($this->students);

    return array_map(function($grade) {
      sort($grade);
      return $grade;
    }, $this->students);
  }
}

// Create an Object Of a Class
$myObj = new School();

// Adding students whith their grades
$myObj->add("Charlie",1);
$myObj->add("Anna",1);
$myObj->add("Barb",1);

$myObj->add("Alex",2);
$myObj->add("Zoe",2);
$myObj->add("Peter",2);

$myObj->add("Jim",5);

// Show the grades of students
// print_r($myObj->grade(5));

// Showing all The students in ordering formate
print_r($myObj->studentByGradeAlphbetical());

?>