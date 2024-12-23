<!-- Create a PHP script that demonstrates the use of $GLOBALS to access variables
across different scopes. -->

<?php
$globalVar = "Hello, World!";

function modifyGlobalVar() {
    $GLOBALS['globalVar'] = "Hello from the function!";
}

echo "Before function call: " . $globalVar . "<br>";
modifyGlobalVar();

echo "After function call: " . $globalVar ;
?>