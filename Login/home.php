<?php 
// need to use sessions, so need to allways use the code below
session_start();
// if user is not loffed in rediredt to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}
?>
<html>
<head>
    <title>FAF User Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/Login/home.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="../Login/logout.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <a href="../Login/profile.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-user-circle"></i> Profile</a>
</nav>

<main w3-container>
    <h1> FAF Tournament Match Data</h1>
    <p> Welcome Back, <?=$_SESSION['name']?>!</p>
    <img src="/images/1.jpg" alt="FAF Image">
</main>


</html>