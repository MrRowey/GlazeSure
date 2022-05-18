<?php
include('../dbconfig.php');

$sql = "SELECT * FROM leads";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Leads</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/viewPages/leads.php" class="w3-bar-item w3-button w3-mobile">Leads</a>
    <a href="/viewPages/customer.php" class="w3-bar-item w3-button w3-mobile">Customer</a>  
    <a href="/viewPages/quotes.php" class="w3-bar-item w3-button w3-mobile">Quotes</a>
    <a href="/viewPages/sales.php" class="w3-bar-item w3-button w3-mobile">Sales</a>
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>
<main class="w3-container">  
    <h1 class="display-2">List of Leads
    </h1>
    <div class="container mt-3">
      <?php
        if ($result->num_rows > 0) {
          echo "<table class='w3-table'>";
          echo "<tr class='w3-blue'>";
          echo "<th>Lead ID</th>";
          echo "<th>Note About Lead</th>";
          echo "</tr>";  
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["notes"] . "</td>";
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