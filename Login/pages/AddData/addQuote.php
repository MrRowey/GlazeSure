<?php
include('../../../dbconfig.php');

## Customer Details

# Get Selected Town.
if(isset($_POST['submit'])){
if(!empty($_POST['townName'])){
  $selected = $_POST['townName'];
  $sql = 'INSERT INTO quotes (ID) VALUES ($selected)';

  if(mysqli_query($conn,$sql)){
    echo "town ID succsefuly enterd";
  } else {
    echo "error with townid" . mysqli_error($conn);
  }
}} 

# Get Selected Town.
#if(isset($_POST['submit'])){
#  if(!empty($_POST['winType'])){
#    $selected = $_POST['winType'];
#    $sql = 'INSERT INTO quotes (ID) VALUES ($selected)';
#  
#    if(mysqli_query($conn,$sql)){
#      echo "town ID succsefuly enterd";
#    } else {
#      echo "error with townid" . mysqli_error($conn);
#    }
#  }}
#
#  # Get Selected Town.
#if(isset($_POST['submit'])){
#  if(!empty($_POST['townName'])){
#    $selected = $_POST['townName'];
#    $sql = 'INSERT INTO quotes (ID) VALUES ($selected)';
#  
#    if(mysqli_query($conn,$sql)){
#      echo "town ID succsefuly enterd";
#    } else {
#      echo "error with townid" . mysqli_error($conn);
#    }
#  }}
#



if (!isset($_POST['submit'])) {
  $msg_to_user = '<p>Please Fill out the Quote</p>';
} else {
  ### Collect all input into form 

  ## Collecting Customer Details
  $leadID = mysqli_real_escape_string($conn,$_REQUEST['leadID']);
  $firstName = mysqli_real_escape_string($conn,$_REQUEST['firstName']);
  $lastName = mysqli_real_escape_string($conn,$_REQUEST['lastName']);
  $companyName = mysqli_real_escape_string($conn,$_REQUEST['companyName']);
  $contactNum = mysqli_real_escape_string($conn,$_REQUEST['contactNum']);
  $contactEmail =mysqli_real_escape_string($conn,$_REQUEST['contactEmail']);
  $streetAddress =mysqli_real_escape_string($conn,$_REQUEST['streetAddress']);
  $townID =mysqli_real_escape_string($conn,$_REQUEST['townID']);
  
  # Inserting Customer Details
  $cussql1 = 'INSERT INTO quotes (LeadID) VALUE ($leadID)';
  $cussql2 = 'INSERT INTO customer (lastName,company,firstName,contactNum,contactEmail,streetAddress,townID) VALUES ("$lastName","$companyName","$firstName",$contactNum,"$contactEmail","$streetAddress",$townID)';
  
  if(mysqli_query($conn, $cussql1)){
    
  }
  ## Order Detials
  #$numofwin = mysqli_real_escape_string($conn,$_REQUEST['numofwin']);
  #$winType = 
  #$numofdoors = mysqli_real_escape_string($conn,$_REQUEST['numofwin']);
  #$doorType =
  ## Price
  #$cost = mysqli_real_escape_string($conn,$_REQUEST['numofwin']);
  #$createdBy = mysqli_real_escape_string($conn,$_REQUEST['numofwin']);


  ## Extra info

  #$leadID = mysqli_real_escape_string($conn,$_REQUEST['']);
  #$numofwin = mysqli_real_escape_string($conn,$_REQUEST['numofwin']);
  #$numofdoor = mysqli_real_escape_string($conn,$_REQUEST['numofdoor']);
  #$doortype = mysqli_real_escape_string($conn,$_REQUEST['']);
  #$wintype = mysqli_real_escape_string($conn,$_REQUEST['']);
  #$d = mysqli_real_escape_string($conn,$_REQUEST['']);
  #$cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
  #$locadd = mysqli_real_escape_string($conn,$_REQUEST['locadd']);

  ## Insert into Customer Table
  #$sql = "INSERT INTO customer (name) VALUES ('$cusname')";
  #$sql2 =  "INSERT INTO quotes (Num_Of_Windows) VALUES ('$numofwin')";
  #
  #if(mysqli_query($conn, $sql)){
  #  echo "Data Inserted Successfully";
  #}else{
  #  echo "ERROR: " . mysqli_error($conn);
  #}
  #if(mysqli_query($conn, $sql)){
  #  echo "Data Inserted Successfully";
  #}else{
  #  echo "ERROR: " . mysqli_error($conn);
  #}
#
}

# Door Type Selection
$sql = "SELECT ID,TypeName FROM doors";
$result = mysqli_query($conn, $sql);

# Window Type Selection
$sql2 = "SELECT ID,TypeName FROM windows";
$result2 = mysqli_query($conn, $sql2);

# Window Type Selection
$sql3 = "SELECT ID,Name FROM town";
$result3 = mysqli_query($conn, $sql3);
?>

<html>
<head>
    <title>Add Quote</title>
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
  <h1 class="display-2">Add New Quote</h1>
  <form class="w3-container" action="addQuote.php" method="POST" style="width: 100%;">
  <h2>Customer Details</h2>
    <div class="w3-row-padding">
      <div class="w3-third">
        <!--  Lead ID  -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Lead ID</b></label>
        <input class="w3-input w3-border" type="number" name="leadID" id="leadID">
      </div>
      <div class="w3-third">
        <!-- First Name -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>First Name</b></label>
        <input class="w3-input w3-border" type="text" name="firstName" id="firstName">
      </div>
      <div class="w3-third">
        <!-- Last Name -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Last Name</b></label>
        <input class="w3-input w3-border" type="text" name="lastName" id="lastName">
      </div>    
    </div>
    <div class="w3-row-padding">
      <div class="w3-third">
        <!-- Contact Number -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Contact Number</b></label>
        <input class="w3-input w3-border" type="number" name="contactNum" id="contactNum">
      </div>
      <div class="w3-third">
        <!-- Company Name-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Company Name</b></label>
        <input class="w3-input w3-border" type="text" name="companyName" id="companyName">
      </div>
      <div class="w3-third">
        <!-- Email -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Email</b></label>
        <input class="w3-input w3-border" type="email" name="contactEmail" id="contactEmail">
      </div>    
    </div>
    <div class="w3-row-padding">
      <div class="w3-half">
        <!-- Street Address-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Street Address</b></label>
        <input class="w3-input w3-border" type="text" name="streetAddress" id="streetAddress">
      </div>
      <div class="w3-half">
        <!-- Town Name -->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Town</b></label>
          <select name='townName' id='townName' class='w3-select w3-border'>
            <option value='-1' disabled selected>Select Town</option>
            <?php
              while ($row = mysqli_fetch_array($result3)) {
              echo "<option value='" . $row['ID'] . "'>" . $row['Name'] . "</option>";
            }
            echo "</select>";
          ?>
      </div>    
    </div>
    <h2>Order Details</h2>
    <div class="w3-row-padding">
      <h3>Windows</h3>  
      <div class="w3-half">
        <!--Number of Windows-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Number of Windows</b></label>
        <input class="w3-input w3-border" type="number" name="numofwin" id="numofwin">
      </div>
      <div class="w3-half">
        <!--Window Type-->
        <label class="w3-text-blue"><b>Windows Type</b></label>
        <?php
          echo "<select name='winType' id='winType' class='w3-select w3-border'>";
          echo "<option value='' disabled selected>Select Window Type</option>";
          while ($row = mysqli_fetch_array($result2)) {
            echo "<option value='" . $row['ID'] . "'>" . $row['TypeName'] . "</option>";
          }
          echo "</select>";
        ?>    
      </div>    
    </div>
    <div class="w3-row-padding">
      <h3>Doors</h3>  
      <div class="w3-half">
        <!--Number of doors-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Number of Doors</b></label>
        <input class="w3-input w3-border" type="number" name="numofdoors" id="numofdoors">
      </div>
      <div class="w3-half">
        <!--door Type-->
        <label class="w3-text-blue"><b>Door Type</b></label>
        <?php
          echo "<select name='doorType' id='doorType' class='w3-select w3-border' >";
          echo "<option value='' disabled selected>Select Door Type</option>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['ID'] . "'>" . $row['TypeName'] . "</option>";
          } 


          
          echo "</select>";
        ?>    
      </div>    
    </div>
    <h2>Price</h2>
    <div class="w3-row-padding">
      <div class="w3-half">
        <!-- cost-->    
        <label class="w3-text-blue"><b>Cost of Quote</b></label>
        <input class="w3-input w3-border" type="number" name="cost" id="cost">
      </div>
      <div class="w3-half">
        <!-- created By -->    
        <label class="w3-text-blue"><b>Quote created by</b></label>
        <input class="w3-input w3-border" type="text" name="createdBy" id="createdBy">  
      </div>    
    </div>
    <h2>Extra Information</h2>
    <div class="w3-row-padding"> 
      <label for="">Notes</label>
      <textarea style="width:100%;height:150px;padding:12px 12px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;background-color: #f8f8f8;resize:vertical" name="notes" id="notes" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button class="w3-btn w3-blue w3-round-large" type="submit">Submit</button>
  </form> 


</main>
</html>

<?php
mysqli_close($conn);
?>