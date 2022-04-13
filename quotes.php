<?php

?>
<html>
    <head>
        <title>GlazeSure Quotes</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
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
        <h2 style="text-align: center;">GlazeSure Quotes</h2>
        <a style="float: right;" type="button" class="btn btn-success" href="/add/add_quote.php">Add New Qoute</a>
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
          </tr>
        </tbody>
        </table>
    </main>

</html>