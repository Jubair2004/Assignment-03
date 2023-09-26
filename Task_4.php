<?php
/*Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

$studentGrades = [
    'student_1' => ['Math' => 100, 'English' => 90, 'Science' => 80],
    'student_2' => ['Math' => 80, 'English' => 85, 'Science' => 95],
    'student_3' => ['Math' => 95, 'English' => 88, 'Science' => 92]
];

function calculateGradesAndAverage($studentGrades) {
    $grades = []; 
    $totalAverage = 0; 

    foreach ($studentGrades as $student => $subjects) {
        $average = array_sum($subjects) / count($subjects);
        $grades[$student] = getGrade($average); 
        $totalAverage += $average; 
    }

    $totalAverage /= count($studentGrades); 

    foreach ($grades as $student => $grade) {
        echo "$student - Grade: $grade <br/>";
    }
    echo "Overall Average: " . getGrade($totalAverage) . "<br/>";
}

function getGrade($average) {
    if ($average >= 90) {
        return 'A+';
    } elseif ($average >= 80) {
        return 'A';
    } elseif ($average >= 70) {
        return 'B';
    } else {
        return 'F';
    }
}

calculateGradesAndAverage($studentGrades);




