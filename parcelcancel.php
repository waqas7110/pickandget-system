<?php

include "connection.php";
error_reporting(0);


$id = $_GET['id'];
 $q = "DELETE FROM parceldetail WHERE id=$id;" ;



//$servername = "localhost";
//$username = "root";
//$password = "";
//$conn = mysqli_connect($servername, $username, $password);

$query = mysqli_query($conn,$q);

header("location:parceldisplay.php");

//header('location:parceldisplay.php');


