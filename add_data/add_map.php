<html>
<?php
include('../config.php');
?>
<head>
    <title>Add Map</title>
    <link rel="stylesheet" href="/style.css">
</head>
<nav>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/match-results/1v1.php">1v1 Matches</a></li>
    </ul>
</nav>
<main>
<h1 class="player-h1">Adding Map</h1>
<p class="player-p">Please Add the Name of the Map you need to add to the data base </p>

<form class="add" action="/add/add_players.php" method="post">
    <input type="text" name="player" id="player"><br>
    <input type="submit" value="Submit">
</form> 
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['player'])) {
        $nameErr = "Username is Required";
    }
    else {
        $player = mysqli_real_escape_string($link,$_REQUEST['player']);

        $sql = "INSERT INTO players (name) VALUES ('$player')";
        if(mysqli_query($link, $sql)){
        echo "Record Added";
        header("location: ../index.php");
        } else {
        echo "Error: Could not execute $sql. " . mysqli_error($link);
        }
    }
}
mysqli_close($link);
?>    
</main>
</html>