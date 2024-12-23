<!-- Create an HTML form for user login with fields for username and password. Write a PHP
script to process the form using $_POST. If the username and password match a predefined
value, display a "Login Successful" message; otherwise, show "Invalid Credentials." -->

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $_SESSION['name'] = htmlspecialchars($_POST['name']);

    setcookie('visited', 'true', time() + (86400 * 30), "/"); 
}

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    if (isset($_COOKIE['visited'])) {
        echo "Welcome back, $name! It’s great to see you again!";
    } else {
        echo "Hello, $name! Nice to meet you.";
    }
} else {
    ?>
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
    <?php
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = "admin";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        echo "<p>Login Successful</p>";
    } else {
        echo "<p>Invalid Credentials</p>";
    }
} else {
    ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
    <?php
}
?>