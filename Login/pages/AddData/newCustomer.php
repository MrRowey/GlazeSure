<?php
include('../../../dbconfig.php');
if ($_POST["form_submit_button"]) {
  # Collecting Data From Form.
  echo "button was pressed<br>";
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $companyName = $_POST['companyName'];
  $contactNumber = $_POST['contactNumber'];
  $contactEmail = $_POST['contactEmail'];
  $streetAddress = $_POST['streetAddress'];
  $townID = $_POST['townName'];

  $sql = "INSERT INTO customer (lastName,firstName,companyName,contactEmail,contactNumber,streetAddress,townID) VALUES ('$lastName','$firstName','$companyName','$contactEmail',$contactNumber,'$streetAddress',$townID)";

  if($conn->query($sql) === TRUE){
    echo "Data Inserted";
  } else {
    echo "Error: " . $conn->error;
  }
}
# Window Type Selection
$sql = "SELECT * FROM town";
$result = $conn->query($sql);
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
  <h1 class="display-2">Add New Customer</h1>
  <form class="w3-container" action="newCustomer.php" method="POST" style="width: 100%;">
    <h2>Customer Details</h2>
    <div class="w3-row-padding">
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>First Name</b></label>
        <input class="w3-input w3-border" type="text" name="firstName" id="firstName">
      </div>
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Last Name</b></label>
        <input class="w3-input w3-border" type="text" name="lastName" id="firstName">
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-third">
        <label class="w3-text-blue w3-animate-input" style="width:40%"><b>Contact Number</b></label>
        <input class="w3-input w3-border" type="text" name="contactNumber" id="contactNumber">
      </div>
      <div class="w3-third">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Company Name</b></label>
        <input class="w3-input w3-border" type="text" name="companyName" id="companyName">
      </div>
      <div class="w3-third">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Email</b></label>
        <input class="w3-input w3-border" type="email" name="contactEmail" id="contactEmail">
      </div>
    </div>
    <div class="w3-row-padding">
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Street Address</b></label>
        <input class="w3-input w3-border" type="text" name="streetAddress" id="streetAddress">
      </div>
      <div class="w3-half">
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Town</b></label>
        <select name='townName' id='townName' class='w3-select w3-border'>
          <option value='-1' disabled selected>Select Town</option>
          <?php
            if($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()){
                echo "<option value='" . $row['ID'] . "'>" . $row['Name'] . "</option>";
              }
            }?>
        </select>
      </div>    
    </div>
      <br>
    <input type="submit" name="form_submit_button" class="w3-btn w3-blue w3-round-large" value="Submit">  
  </form> 
</main>
</html>

<?php
$conn->close();
?>