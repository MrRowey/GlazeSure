<?php
session_start();
include('dbconfig_Admin.php');

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please enter your Username and Password');
}

if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // account exsists and verify the password
        // remeber to use password_hash in registreaion file to store the hased passowrds
        if (password_verify($_POST['password'], $password)) {
            // verificaion succsefull
            // create sessiosn to know the user is loggeding acting like a cookie
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../Login/home.php');
        } else {
            echo 'Inncorrect Password';
            // incorrect password
        }
    } else {
        echo ' inncorrect username!';
        // incorrect username
    }

    $stmt->close();
}
?>