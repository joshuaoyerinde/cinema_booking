<?php

$connection = mysqli_connect("localhost","root","","cinema_db");
$id=$_GET['id'];

$del="DELETE FROM movie_tb WHERE id='$id'";
$movdele=mysqli_query($connection,$del);

header('Location: uploaded-files.php');
?>