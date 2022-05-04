<html>
<head>
<title>FAF 1v1 Match Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-md bg-secondary navbar-dark justify-content-center">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="#">
                <img src="" alt="FAF Logo" style="width:40px;" >
            </a>
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/match-results/1v1.php">1v1 Match Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/add/data_Inset.php">Add Data</a>
            </li>
        </ul>
    </div>
</nav>
<body class="bg-dark">
    <main class="container-fluid pt-3 bg-dark text-white">  
        <h1 class="display-3">FAF Add Match Data</h1>
         
        <div class="btn-group">
            <a href="/add/add_map.php" class="btn btn-primary">Add Map</a>
            <a href="/add/add_tournament.php" class="btn btn-primary">Add Tournament</a>
            <a href="/add/add_players.php"class="btn btn-primary">Add Players</a>
            <a href="/add/add_match_data.php" class="btn btn-primary">Add Match Data</a>        
        </div>

        <h2>Order of Data Input</h2>
        <div class="card bg-secondary text-white"> 
          <div class="card-header">
            <a class="btn text-white" data-bs-toggle="collapse" href="#collapseOne">
              Add Map
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body bg-dark">
                This will alow you to add a new map to the Database to use
            </div>
          </div>
        </div>      

        <div class="card bg-secondary text-white">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseTwo">
              Collapsible Group Item #2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
            <div class="card-body bg-dark">
              Lorem ipsum..
            </div>
          </div>
        </div>      

        <div class="card bg-secondary text-white">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body bg-dark">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card bg-secondary text-white">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body bg-dark">
              Lorem ipsum..
            </div>
          </div>
        </div>

</div> 







        <h3 class="info">Order of Data Input</h3>
        <p class="info">1. Add Map</p>
        <p class="info">2. Add Tournament</p>
        <p class="info">3. Add Players</p>
        <p class="info">4. Add Match Data</p>

        <h3 class="info">Add Map</h3>
        <p class="info">This will alow you to add a new map to the Database to use</p>

        <h3 class="info">Add Match Data</h3>
        <p class="info">This will alow you to add all the data for a match record to add to the DB</p>

        <h3 class="info">Add Player</h3>
        <p class="info">Any new player in a tournamnet you can add them here first before using the match data input</p>

        <h3 class="info">Add Tournament</h3>
        <p class="info">This add the Tournament name for which the record came from</p>


    </main>
</body>
</html>