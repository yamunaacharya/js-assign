<?php
$students = [
    "Ram" => 85,
    "Shita" => 92,
    "hari" => 78,
    "gita" => 95
];

$totalGrade = 0;
$totalStudents = count($students);

foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade<br>";
    $totalGrade += $grade;
}

$averageGrade = $totalGrade / $totalStudents;
echo "<br>Average Grade: " . round($averageGrade, 2);
?>
