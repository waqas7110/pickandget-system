<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

mysqli_select_db($conn,'peckandget');

if(!$conn){
//    echo 'connected';
//}else{
    echo'not connected';
}
