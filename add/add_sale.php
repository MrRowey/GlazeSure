<?php

?>
<html>
    <head>
        <title>GlazeSure Add Sales</title>
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
    <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="quote_id" class="form-label">Quote ID:</label>
                <input type="number" class="form-control" id="quote_id" placeholder="Quote ID Number" name="quote_id">
            </div>
            <div class="mb-3 mt-3">
                <label for="customer_id" class="form-label">Customer_id:</label>
                <input type="number" class="form-control" id="cust_id" placeholder="Customer ID" name="cust_id">
            </div>
            <div class="mb-3 mt-3">
                <label for="job_type" class="form-lable">Job Type:</label>
                <select class="form-select">
                  <option>Supply</option>
                  <option>Supply & Install</option>
                </select> 
            </div>
            <div class="mb-3 mt-3 form-check">
              <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
              <label class="form-check-label">Sale Completed</label>
            </div> 
            <div class="mb-3 mt-3">
                <label for="comment">Comments</label>
                <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
    </main>

</html>