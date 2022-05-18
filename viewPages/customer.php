<?php
include('../dbconfig.php');

$sql = "select customer.id,customer.lastName,customer.firstName,customer.companyName,customer.contactEmail,customer.contactNumber,customer.streetAddress,town.Name from customer,town WHERE customer.townID = town.id;";
$result = $conn->query($sql);
?>
<html>
<head>
    <title>Customers</title>
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
    <h1 class="display-2">List of Customers</h1>
    <div class="container mt-3">
      <?php
        if ($result->num_rows > 0) {
          echo "<table class='w3-table'>";
          echo "<tr class='w3-blue'>";
          echo "<th>ID</th>";
          echo "<th>Last Name</th>";
          echo "<th>First Name</th>";  
          echo "<th>Company</th>";
          echo "<th>Contact Email</th>";
          echo "<th>Contact Number</th>";
          echo "<th>Street Addresss</th>";
          echo "<th>Town Name</th>";
          echo "</tr>";  
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["lastName"] . "</td>";
            echo "<td>" . $row["firstName"] . "</td>";
            echo "<td>" . $row["companyName"] . "</td>";
            echo "<td>" . $row["contactEmail"] . "</td>";
            echo "<td>" . $row["contactNumber"] . "</td>";
            echo "<td>" . $row["streetAddress"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
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