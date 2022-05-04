<?php
include('../../dbconfig.php');



$sql = "SELECT ID, TypeName FROM doors";
$result = mysqli_query($conn, $sql);
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
    <h1 class="display-2">All Quotes</h1>
    <div class="container mt-3">
      <a href="/Login/pages/AddData/addQuote.php" class="w3-btn w3-green w3-round" style="float: right;">Add Quote</a>
      <?php
       if (mysqli_num_rows($result) > 0) {
        echo "<table class='w3-table'>";
        echo "<tr class='w3-blue'>";
        echo "<th>ID</th>";
        echo "<th>LeadID</th>";
        echo "<th>Number of Windows</th>";  
        echo "<th>Number of Doors</th>";
        echo "<th>Window Type</th>";
        echo "<th>Door Type</th>";
        echo "<th>Cost</th>";
        echo "<th>CusomterID</th>";
        echo "<th>Notes</th>";
        echo "</tr>";  
                
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["ID"] . "</td>";
          echo "<td>" . $row["TypeName"] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "0 Results";
      }






      ?>
    </div>
</main>
</html>