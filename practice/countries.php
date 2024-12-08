<!-- create a numeric array containing the names of five countries. Display the array elements using a loop. -->

<?php
$countries = ["Nepal", "India", "Canada", "America", "Norway"];
for ($i = 0; $i < count($countries); $i++) {
    echo "$countries[$i]
";
}

?>