<?php
$conn = mysqli_connect('localhost', 'root','root','GlazeSure');
if(!$conn) {
    die("connecion failid: " . mysqli_connect_error());
}
?>