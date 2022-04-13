<?php
include('dblink.php');

$sql = "SELECT sales.id, sales.quote_id, sales.job_type_id, sales.sale_completed, sales.customer_id , sales.notes FROM sales, customer, quotes WHERE sales.quote_id = quotes.id, sales.customer_id = customer.id";

/* SELECT [Spesific Rows] FROM [tables] WHERE [tables links]; */

$result = $conn->query($sql);
?>
<html>
    <head>
        <title>GlazeSure Sales</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/style.css">
    </head>
    <header>
        <h1>GlazeSure Sales System</h1>
    </header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/sales.php">Sales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quotes.php">Quotes</a>
              </li>    
            </ul>
          </div>
        </div>
    </nav>
    <main class="container p-5 my-3 text-white">
        <h2 style="text-align: center;">GlazeSure Sales</h2>
        <a style="float: right;" type="button" class="btn btn-success" href="/add/add_sale.php">Add New Sale</a>
        <a style="float: right;" type="button" class="btn btn-success btn1" href="/update/update_sale.php">Update Sale</a>
        <?php
          if ($result->num_rows > 0) {
            echo '<table class="table table-hover">';
            echo '<tr>';
            echo '<th>Sale ID</th>';
            echo '<th>Quote ID</th>';
            echo '<th>Job Type</th>';
            echo '<th>Sale Completed</th>';
            echo '<th>Customer ID</th>';
            echo '<th>Comments</th>';
            echo '</tr>';
            while($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $row['sales.id'] . '</th>';
              echo '<td>' . $row['sales.quote_id'] . '</th>';
              echo '<td>' . $row['sales.job_type_id'] . '</th>';
              echo '<td>' . $row['sales.sale_completed'] . '</th>';
              echo '<td>' . $row['sales.customer_id'] . '</th>';
              echo '<td>' . $row['sales.notes'] . '</th>';
              echo '</tr>';
            }
            echo '</table>';
          }
            mysqli_close($conn);
        ?>
    </main>
</html>