<?php

?>
<html>
    <head>
        <title>GlazeSure Add Quote</title>
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
        <h3>Internal Sales System for recoding all of GlazeSure Sales and quotes</h3>

        <form action="/add/add_quote.php">
            <div class="mb-3 mt-3">
                <label for="num_of_windows" class="form-label">Number of Windows:</label>
                <input type="number" class="form-control" id="num_of_windows" placeholder="Number of Windows" name="num_of_windows">
           </div>
           <div class="mb-3 mt-3">
                <label for="num_of_windows" class="form-label">Number of Doors:</label>
                <input type="number" class="form-control" id="num_of_windows" placeholder="Number of Doors" name="num_of_doors">
            </div>
            <div class="mb-3 mt-3">
                <label for="window_type" class="form-lable">Window Type:</label>
                <select class="form-select" required>
                  <option>Casement</option>
                  <option>Bow & Bay</option>
                  <option>Sliding Stash</option>
                </select> 
            </div>
            <div class="mb-3 mt-3">
                <label for="door_type" class="form-lable">Door Type:</label>
                <select class="form-select" placeholder="Door Type">
                  <option>Residential</option>
                  <option>Composite</option>
                  <option>French</option>
                  <option>Patio</option>
                </select> 
            </div>
            <div class="mb-3 mt-3">
                <label for="cost" class="form-label">Cost:</label>
                <input type="number" class="form-control" id="costpwd" placeholder="Enter Cost" name="cost">
            </div>
            <div class="mb-3 mt-3">
                <label for="comment">Comments</label>
                <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 



    </main>

</html>