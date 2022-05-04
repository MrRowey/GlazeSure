<?php
include('../dbconfig.php');

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please complete the sign up form');
}

if (empty($_POST['username']) || empty($_POST['password'])) {
    exit('Plase complete the sing up form');
}

//if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
//    exit('Username is not valid');
//}

// Checking if the username allready exisists
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    // bining the parameters (s = strin, i = int ect), has the passowrd using php password_hash function.
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    // store the resole so we can check if it is allreay in the DB
    if ($stmt->num_rows > 0) {
        echo ' Username Allready Exsits, please choost another one';
        header('Location: ../signup.php');
    } else {
        // username dose not existe, insert new account
        if ($stmt = $conn->prepare('INSERT INTO accounts (username, password) VALUES (?, ?)')) {
            // to prevent exposing passwords in the db we encripted them by hashing them
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ss', $_POST['username'], $password);
            $stmt->execute();
            echo 'You have successfully registerd, you can now login';
            sleep(2);
            header('Location: ../index.php');
        } else {
            // somthing worng with SQL statmenet
            echo 'Could not prepare staement!';
        }
    }
}
$conn->close();
?>