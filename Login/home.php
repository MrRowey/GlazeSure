<?php 
// need to use sessions, so need to allways use the code below
session_start();
// if user is not loffed in rediredt to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
};

include('dbconfig_Admin.php');
# Get Total records
$sql = "SELECT COUNT(*) AS totalQuotes FROM quotes";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

$sql1 = "SELECT COUNT(*) AS totalSales FROM sales";
$result1 = $conn->query($sql1);
$data1 = $result1->fetch_assoc();

$sql2 = "SELECT COUNT(*) AS totalLeads FROM leads";
$result2 = $conn->query($sql2);
$data2 = $result2->fetch_assoc();

# List last 5 of Qoutes & sales

$quoteSQL = 'SELECT quotes.ID,quotes.cost, customer.firstName,customer.lastName  FROM quotes, customer WHERE quotes.customerID = customer.id';
$result3 = $conn->query($quoteSQL);

$saleSQL = 'SELECT sales.id, job_type.type, sale_completed.completed FROM sales, job_type,sale_completed WHERE sales.job_type_id = job_type.id AND sales.sale_completed = sale_completed.id AND sale_completed=3;';
$result4 = $conn->query($saleSQL);

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
  <p> Welcome Back, <?=$_SESSION['name'];?>!</p>
    
  <h2></h2>
  <div class="w3-row">
  <div class="w3-col m4 13 w3-center">
      <h3>Current Quotes</h3>
    </div>
    <div class="w3-col m4 13 w3-center">
      <h3>Current Sales</h3>
    </div>
    <div class="w3-col m4 13 w3-center">
      <h3>Current Leads</h3>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col m4 13 w3-center">
      <span class="w3-badge w3-jumbo w3-blue w3-padding-large">
      <?php  
          echo $data['totalQuotes'];
        ?>
      </span>
    </div>
    <div class="w3-col m4 13 w3-center">
      <span class="w3-badge w3-jumbo w3-red w3-padding-large">
      <?php  
          echo $data1['totalSales'];
        ?></div>
    <div class="w3-col m4 13 w3-center">
      <span class="w3-badge w3-jumbo w3-green w3-padding-large">
      <?php  
          echo $data2['totalLeads'];
        ?></div>
  </div>
  <hr>
  <div class="w3-row">
    <div class="w3-col s6 w3-center">
      <h3>Last 5 Quotes</h3>
    </div> 
    <div class="w3-col s6 w3-center">
      <h3>Last 5 Sales</h3>
    </div>
  </div>
  <div class="w3-row">
    <div class="w3-col s6 w3-center">
      <?php
        if ($result3->num_rows > 0) {
          echo "<table class='w3-table'>";
          echo "<tr class='w3-blue'>";
          echo "<th class='w3-center'>ID</th>";
          echo "<th class='w3-center'>Name</th>";
          echo "<th class='w3-center'>Cost</th>";
          echo "</tr>";  
          while($row = $result3->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='w3-center'>" . $row["ID"] . "</td>";
            echo "<td class='w3-center'>" . $row["firstName"] . " " . $row["lastName"] . "</td>";
            echo "<td class='w3-center'>£ " . $row["cost"] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 Results";
        }
      ?>
    </div> 
    <div class="w3-col s6 w3-center">
      <?php
        if ($result4->num_rows > 0) {
          echo "<table class='w3-table'>";
          echo "<tr class='w3-red'>";
          echo "<th class='w3-center'>Quote ID</th>";
          echo "<th class='w3-center'>Job Type</th>";
          echo "</tr>";  
          while($row = $result4->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='w3-center'>" . $row["id"] . "</td>";
            echo "<td class='w3-center'>" . $row["type"] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 Results";
        }
      ?>
    </div> 
    </div>
  </div>
  <hr>

</main>


</html>