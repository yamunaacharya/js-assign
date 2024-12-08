<!-- create a PHP script to display the day of the week based on a numeric input using a switch statement -->
<?php
$day = "1";

switch ($day) {
    case "1":
        echo "It is Sunday!";
        break;
    case "2":
        echo "It is monday!";
        break;
    case "3":
        echo "It is Tuesday!";
        break;
	case "4":
        echo "It is Wednesday!";
        break;
    case "5":
        echo "It is Thursday!";
        break;
    case "6":
        echo "It is FRiday!";
        break;
	case "7":
        echo "It is Saturday!";
        break;
    default:
        echo "Invalid number!";
}

?>