<?php
// Task 4: Multidimensional Array
//
//Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    ["Math" => "80", "English" => "90", "Science" => "75"],
    ["Math" => "90", "English" => "70", "Science" => "78"],
    ["Math" => "80", "English" => "90", "Science" => "80"],
];

function avgGrade($studentGrades)
{
    foreach ($studentGrades as $stdKey => $std) {
        $total = array_sum($std);
        $average = $total / count($std);
        echo "Student " . ($stdKey + 1) . " average grade : " . floor($average);
        echo "\n";
    }

}
avgGrade($studentGrades);
