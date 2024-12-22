<?php
echo "<h1>Welcome to the Date Difference Calculator</h1>";
echo "<p>Today's date is " . date("Y-m-d H:i:s") . "</p>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    echo "<p>Start Date: $startDate</p>";
    echo "<p>End Date: $endDate</p>";

    $startDateTime = strtotime($startDate);
    $endDateTime = strtotime($endDate);

    if ($startDateTime && $endDateTime) {
        $difference = abs($endDateTime - $startDateTime) / (60 * 60 * 24);
        echo "<p>The difference is $difference day(s).</p>";
    } else {
        echo "<p>Invalid dates provided.</p>";
    }
} else {
    echo "<p>Please submit the form to calculate the date difference.</p>";
}
?>
