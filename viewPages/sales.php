<?php
include('../dbconfig.php');

$sql = "SELECT sales.id, sales.quote_id, job_type.type, sale_completed.completed, sales.notes FROM sales, job_type, sale_completed WHERE sales.job_type_id = job_type.id AND sales.sale_completed = sale_completed.id ;";

$result = $conn->query($sql);

?>
<html>
<head>
    <title>Sales</title>
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
    <h1 class="display-2">Sales</h1>
    <div class="container mt-3">
      <?php
        if ($result->num_rows > 0) {
          echo "<table class='w3-table'>";
          echo "<tr class='w3-blue'>";
          echo "<th>ID</th>";
          echo "<th>Quote ID</th>";
          echo "<th>Job Type</th>";  
          echo "<th>Sale Completed</th>";
          echo "<th>Notes</th>";
          echo "</tr>";  
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["quote_id"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["completed"] . "</td>";
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