<!-- Write PHP code to display the following information:
● Server's IP address.
● Server's name.
● Server's software. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="displayinfo.php"></form>
    <?php
    echo "server IP address:" . $_SERVER['SERVER_ADDR'] ."<br>" ;

    echo "server Name:" . $_SERVER['SERVER_NAME'] . "<br>" ;

    echo "Server Software:" . $_SERVER['SERVER_SOFTWARE']

   ?>
</body>
</html>