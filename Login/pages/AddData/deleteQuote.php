<?php
include('../../dbconfig_Admin.php');

$id = $_GET["ID"];
$delete = $_GET["delete"];

if ($delete == "true") {
  // Delete from the database
  $sql = "DELETE FROM quotes WHERE ID = $id";

  echo "<p>" . $sql . "</p>";

  if ($conn->query($sql) === TRUE){
    header("location: ../../pages/quotes.php");
  }
  else {
    echo "Error: " . $conn->error . "</p>";
  }
}

?>
<html>
<head>
    <title>Delete Quote</title>
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
  <div class="w3-panel w3-red">
  <h3>DANGER!</h3>
  <p>Your are about to Delete Quote <?php echo "$id" ?> Are you sure you want to do this</p>
  </div>
  <a class="w3-button w3-green" href="/Login/home.php">DONT DELETE</a>
  <br>
  <br>
  <a class="w3-button w3-red" href="deleteQuote.php?ID=<?php echo $id ?>&delete=true">DELETE BOOK</a>

</main>
</html>

<?php
mysqli_close($conn);
?>