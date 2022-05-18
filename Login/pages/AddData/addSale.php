<?php
include('../../dbconfig_Admin.php');

if ($_POST['submit']) {
  $msg_to_user = '<p>Please Fill out the quote!</p>';
} else {

  $quoteID = $_POST["quoteID"];
  $jobType = $_POST["jobType"];
  $SaleComp = $_POST["SaleComp"];
  $notes = $_POST["notes"];
  

  $sql = "INSERT INTO sales (quote_id, job_type_id, sale_completed, notes) VALUES ($quoteID, $jobType, $SaleComp, '$notes')";

  if(mysqli_query($conn, $sql)){
    echo "Data Inserted Successfully";
  }else{
    echo "ERROR: " . mysqli_error($conn);
  }
}

# Quote ID
$sql = "SELECT ID FROM quotes";
$result = mysqli_query($conn, $sql);
# Job Type Selection
$sql2 = "SELECT id,type FROM job_type";
$result2 = mysqli_query($conn, $sql2);
# Sale Completed Selection
$sql3 = "SELECT id,completed FROM sale_completed";
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
  <h1 class="display-2">New Sale</h1>
  <form class="w3-container" action="addSale.php" method="POST" style="width: 100%;">
    <h2>Order Details</h2>
    <div class="w3-row-padding">
      <div class="w3-third">
        <!--Quote ID-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Quote ID</b></label>
          <select name='quoteID' id='quoteID' class='w3-select w3-border'>
          <?php
            echo "<option value='' disabled selected>Select Quote ID</option>";
            while ($row = mysqli_fetch_array($result)) {
              echo "<option value='" . $row['ID'] . "'>" . $row['ID'] . "</option>";
            }
            echo "</select>";
          ?>
      </div>
      <div class="w3-third">
        <!-- Job Type-->
        <label class="w3-text-blue"><b>Job Type</b></label>
        <?php
          echo "<select name='jobType' id='jobType' class='w3-select w3-border'>";
          echo "<option value='' disabled selected>Select Job Type</option>";
          while ($row = mysqli_fetch_array($result2)) {
            echo "<option value='" . $row['id'] . "'>" . $row['type'] . "</option>";
          }
          echo "</select>";
        ?>    
      </div>
      <div class="w3-third">
        <!--Number of doors-->    
        <label class="w3-text-blue  w3-animate-input" style="width:40%"><b>Sale Completed</b></label>
        <?php
          echo "<select name='SaleComp' id='SaleComp' class='w3-select w3-border' >";
          echo "<option value='' disabled selected>Select Sale Completion</option>";
          while ($row = mysqli_fetch_array($result3)) {
            echo "<option value='" . $row['id'] . "'>" . $row['completed'] . "</option>";
          }         
          echo "</select>";
        ?>    
      </div>    
    </div>
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