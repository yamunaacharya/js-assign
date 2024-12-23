<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $_SESSION['name'] = htmlspecialchars($_POST['name']);

    setcookie('visited', 'true', time() + (86400 * 30), "/"); 
}

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    if (isset($_COOKIE['visited'])) {
        echo "Welcome back, $name! It's great to see you again!";
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
?>
