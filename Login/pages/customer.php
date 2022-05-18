<?php
include('../../dbconfig.php');

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
    <a href="/Login/home.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/Login/pages/leads.php" class="w3-bar-item w3-button w3-mobile">Leads</a>
    <a href="/Login/pages/customer.php" class="w3-bar-item w3-button w3-mobile">Customer</a>  
    <a href="/Login/pages/quotes.php" class="w3-bar-item w3-button w3-mobile">Quotes</a>
    <a href="/Login/pages/sales.php" class="w3-bar-item w3-button w3-mobile">Sales</a>
    <a href="/Login/pages/management.php" class="w3-bar-item w3-button w3-mobile">Data Management</a>    
    <a href="../Login/logout.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    <a href="../Login/profile.php" class="w3-bar-item w3-button w3-mobile" style="float: right;"><i class="fas fa-user-circle"></i> Profile</a>
</nav>
<main class="w3-container">  
    <h1 class="display-2">List of Customers</h1>
    <div class="container mt-3">
      <a href="/Login/pages/AddData/newCustomer.php" class="w3-btn w3-green w3-round" style="float: right;">Add New Customer</a>
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