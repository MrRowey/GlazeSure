<?php
include('../dbconfig_Admin.php');
?>
<html>
<head>
    <title>Managements</title>
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
<main class="w3-container" style="text-align: center;">  
    <h1 class="display-2">Base Data Input for Autofill for Quote</h1>
    <div class="container mt-3 ">
      <a href="/Login/pages/AddData/addTown.php" class="w3-btn w3-blue w3-round">Add Town</a>
      <a href="/Login/pages/AddData/addDoor.php" class="w3-btn w3-blue w3-round">Add Doors</a>
      <a href="/Login/pages/AddData/addWindows.php" class="w3-btn w3-blue w3-round">Add Windows</a>
    </div>
    <p>Mangemenr only to add data to the Town,Doors & windows Tables</p>


</main>
</html>