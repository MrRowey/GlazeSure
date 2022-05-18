<?php
include('../../dbconfig_Admin.php');

if (!isset($_POST['message'])) {
  $msg_to_user = '<p>Please add the Door Type</p>';
} else {

  $Message = mysqli_real_escape_string($conn, $_REQUEST['message']);

  $sql = "INSERT INTO leads (notes) VALUES ('$Message')";

  if(mysqli_query($conn, $sql)){
    echo "Data Inserted Successfully";
  }else{
    echo "ERROR: " . mysqli_error($conn);
  }
}
?>
<html>
<head>
    <title>FAF Tournament Match Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/Login/home.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/Login/pages/leads.php" class="w3-bar-item w3-button w3-mobile">Leads</a>
    <a href="/Login/pages/quotes.php" class="w3-bar-item w3-button w3-mobile">Quotes</a>
    <a href="/Login/pages/sales.php" class="w3-bar-item w3-button w3-mobile">Sales</a>
    <a href="/Login/pages/management.php" class="w3-bar-item w3-button w3-mobile">Data Management</a>    
    <a href="../Login/logout.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <a href="../Login/profile.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-user-circle"></i> Profile</a>
</nav>
<main class="w3-container">  
  <h1 class="display-2">Add Lead Notes</h1>
  <form class="w3-container" action="addLead.php" method="POST">
    <label class="w3-text-blue">Notes</label><br>
    <textarea name="message" id="message" cols="100" rows="10"></textarea><br>
    <br>
    <button class="w3-btn w3-blue" type="submit">Submit</button>
  </form>
</main>
</html>

<?php
mysqli_close($conn);
?>