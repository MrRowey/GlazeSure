<?php
include('../../dbconfig_Admin.php');

if (!isset($_POST['cost'])) {
  $msg_to_user = '<p>Please Fill out the quote!</p>';
} else {

  $numWin = $_POST["numofwin"];
  $numDoor = $_POST["numofdoors"];
  $winType = $_POST["winType"];
  $doorType = $_POST["doorType"];
  $cost = $_POST["cost"];
  $cusName = $_POST["cusName"];
  $notes = $_POST["notes"];
  $leadID = $_POST["leadID"];

  $sql = "INSERT INTO quotes (LeadID,Num_Of_windows,Num_Of_Doors,Window_TypeID,Door_TypeID,Cost,CustomerID,Notes) VALUES ($leadID,$numWin,$numDoor,'$winType','$doorType',$cost,$cusName,'$notes')";

  if(mysqli_query($conn, $sql)){
    echo "Data Inserted Successfully";
  }else{
    echo "ERROR: " . mysqli_error($conn);
  }
}

# Door Type Selection
$sql = "SELECT ID,doorType FROM doors";
$result = mysqli_query($conn, $sql);

# Window Type Selection
$sql2 = "SELECT ID,windowType FROM windows";
$result2 = mysqli_query($conn, $sql2);
# Window Type Selection
$sql3 = "SELECT id,firstName,lastName FROM customer";
$result3 = mysqli_query($conn, $sql3);
# Lead ID
$sql4 = "SELECT ID FROM leads";
$result4 = mysqli_query($conn, $sql4);

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
            echo "<option value='" . $row['ID'] . "'>" . $row['windowType'] . "</option>";
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
            echo "<option value='" . $row['ID'] . "'>" . $row['doorType'] . "</option>";
          }         
          echo "</select>";
        ?>    
      </div>    
    </div>
    <h2>Price</h2>
    <div class="w3-row-padding">
      <div class="w3-third">
        <!-- cost-->    
        <label class="w3-text-blue"><b>Cost of Quote</b></label>
        <input class="w3-input w3-border" type="number" name="cost" id="cost">
      </div>
      <div class="w3-third">
        <!--door Type-->
        <label class="w3-text-blue"><b>Customer Name</b></label>
        <select name='cusName' id='cusName' class='w3-select w3-border' >
          <option value='' disabled selected>Select Customer</option>
          <?php  while ($row = mysqli_fetch_array($result3)) {
            echo "<option value='" . $row['id'] . "'>" . $row['firstName'] . " " . $row['lastName'] . "</option>";
          }?>         
          </select> 
      </div>
      <div class="w3-third">
        <!--door Type-->
        <label class="w3-text-blue"><b>Lead ID</b></label>
        <select name='leadID' id='leadID' class='w3-select w3-border' >
          <option value='' disabled selected>Select Lead ID</option>
          <?php  while ($row = mysqli_fetch_array($result4)) {
            echo "<option value='" . $row['ID'] . "'>" . $row['ID'] . "</option>";
          };
          ?>         
        </select> 
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