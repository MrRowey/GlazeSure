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
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/Login/home.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/Login/pages/leads.php" class="w3-bar-item w3-button w3-mobile">Leads</a>
    <a href="/Login/pages/customer.php" class="w3-bar-item w3-button w3-mobile">Customer</a>  
    <a href="/Login/pages/quotes.php" class="w3-bar-item w3-button w3-mobile">Quotes</a>
    <a href="/Login/pages/sales.php" class="w3-bar-item w3-button w3-mobile">Sales</a>
    <a href="/Login/pages/management.php" class="w3-bar-item w3-button w3-mobile">Data Management</a>    
    <a href="../Login/logout.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <a href="../Login/profile.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-user-circle"></i> Profile</a>
</nav>

<main w3-container>
    <h1> GlazeSure Dashboard</h1>
    <p> Welcome Back, <?=$_SESSION['name']?>!</p>
    <div w3-container>
        <h2></h2>
    </div>

    <div>
    <h2>Recent Leads</h2>
    

    </div>

    <div>
    <h2>recent Quotes</h2>
    </div>

    <div>
    <h2>Recent Sales</h2>
    </div>

</main>


</html>