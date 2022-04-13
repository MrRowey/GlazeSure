<?php

$conn = mysqli_connect('localhost', 'sales_rep','6BbGhj9xkbEB8Xfz','GlazeSure');

if(!$conn) {
    die("connecion failid: " . mysqli_connect_error());
}

echo "connected DB";
?>