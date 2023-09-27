<?php

$studentGrades = array(
    ["Math" => 85, "English" => 78, "Science" => 92],
    ["Math" => 92, "English" => 88, "Science" => 90],
    ["Math" => 78, "English" => 85, "Science" => 86]
);

function printAverages($gradesArray) {
    foreach ($gradesArray as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        $student += 1;
        echo "Student {$student} - Average Grade: {$average} </br>";
    }
}

printAverages($studentGrades);


?>