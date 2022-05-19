<?php
include('../../dbconfig_Admin.php');

$customer_id = $_GET['id'];

// Check if Submit button has been pressed on form
if (isset($_GET['submit_button'])) {
	// This is the update code
	echo "<p>IN THE UPDATE IF STATEMENT</p>";
	$customer_id = $_GET['id'];
	$lastName = $_GET['lastName'];
  $firstName = $_GET['firstName'];
  $company = $_GET['companyName'];
  $email = $_GET['contactEmail'];
  $phone = $_GET['contactNumber'];
  $strAdd = $_GET['streetAddress'];
  
	$sql = "UPDATE customer SET lastName = '$lastName', firstName = '$firstName', companyName = '$company', contactEmail = '$email', contactNumber = $phone, streetAddress = '$strAdd' WHERE id = $customer_id ;";
	
	echo "<p>SQL is : " . $sql . "</p>";
	
	if ($conn->query($sql) === TRUE) {
		echo "<p>RECORD UPDATED SUCCESSFULLY</p>";
	}
	else {
		echo "ERROR: " . $conn->error . "</p>";
	}
}

echo "<p>IN THE MAIN CODE</p>";

$sql = "SELECT * FROM customer WHERE id = " . $customer_id;
echo "<p>SQL is : " . $sql . "</p>";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$lastName = $row['lastName'];
$firstName = $row['firstName'];
$company = $row['companyName'];
$email = $row['contactEmail'];
$phone = $row['contactNumber'];
$strAdd = $row['streetAddress'];

?>

<html>
<head>
    <title>Add New Customer</title>
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
<h1>Update Book <?php echo $row["id"] ?> Record</h1>

<h1 class="display-2">Add New Customer</h1>
  <form class="w3-container" action="updateCustomer.php" method="GET" style="width: 100%;">
    <input type="hidden" name="id" value="<?php echo $customer_id ?>">
    <h2>Customer Details</h2>
    <div class="w3-row-padding">
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>First Name</b></label>
        <input class="w3-input w3-border" type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>">
      </div>
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Last Name</b></label>
        <input class="w3-input w3-border" type="text" name="lastName" id="firstName" value="<?php echo $lastName ?>">
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-third">
        <label class="w3-text-blue w3-animate-input" style="width:40%"><b>Contact Number</b></label>
        <input class="w3-input w3-border" type="text" name="contactNumber" id="contactNumber" value="<?php echo $phone ?>">
      </div>
      <div class="w3-third">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Company Name</b></label>
        <input class="w3-input w3-border" type="text" name="companyName" id="companyName" value="<?php echo $company ?>">
      </div>
      <div class="w3-third">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Email</b></label>
        <input class="w3-input w3-border" type="email" name="contactEmail" id="contactEmail" value="<?php echo $email ?>">
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Street Address</b></label>
        <input class="w3-input w3-border" type="text" name="streetAddress" id="streetAddress" value="<?php echo $strAdd ?>">
      </div>
    </div>
      <br>
    <input type="submit" name="submit_button" class="w3-btn w3-blue w3-round-large" value="submit">  
  </form> 
</main>
</html>

<?php
$conn->close();
?>