<!-- Write PHP code to display the current date and time in the following formats:
● YYYY-MM-DD HH:MM:SS
● Day of the week, Month DD, YYYY -->

<?php
echo "Current date and time (YYYY-MM-DD HH:MM:SS): " . date("Y-m-d H:i:s") . "<br>";

echo "Current date (Day of the week, Month DD, YYYY): " . date("l, F d, Y");
?>
