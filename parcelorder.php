<?php


$conn=null;
include "connection.php";

if(isset($_POST ['done'])){
//    $id=$_POST["id"];
    $senderaddress=$_POST["senderaddress"];
    $receiveraddress=$_POST["receiveraddress"];
    $mobile=$_POST["mobile"];
    $weight=$_POST["weight"];
    $distance=$_POST["distance"];
    $time=$_POST["time"];
    $amount=$_POST["amount"];



    $q =   "INSERT INTO `parceldetail`(`senderaddress`, `receiveraddress`, `mobile`, `weight`, `distance`, `time`, `amount`) VALUES ('$senderaddress','$receiveraddress','$mobile','$weight','$distance','$time','$amount')";

//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $conn = mysqli_connect($servername, $username, $password);


    $query = mysqli_query($conn,$q);
header("location:parceldisplay.php");
}

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Parcel Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">
        <div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> Parcel Detail </h1>
        </div>
            <!--                   <label> Id </label>-->
            <!--                   <input type="text" name="id" class="form-control"><br>-->


            <label> Sender Address </label>
            <input type="text" id="senderaddress" name="senderaddress" class="form-control">

            <label> Receiver Address </label>
            <input type="text" id="receiveraddress" name="receiveraddress" class="form-control">

            <label> Mobile Number </label>
            <input type="text" id="mobile" name="mobile" class="form-control">


            <label> Weight </label>
            <input type="text" id="weight" name="weight" class="form-control">

            <label> Distance </label>
            <input type="text" id="distance" name="distance" class="form-control">


            <label> Time </label>
            <input type="text" id="time" name="time" class="form-control">
<!--            <input class="form-control"-->
<!--                   type="text" id="datetime" />-->

            <label> Amount </label>
            <input type="text" id="amount" name="amount" class="form-control">

            <button class="btn btn-success "  type="submit" id="done" name="done">  SUBMIT </button>

        </div>
        <p>Please enter all correct information.Thanks </p>
    </form>
</div>

<!--<script>-->
<!---->
<!--    // Below code sets format to the-->
<!--    // datetimepicker having id as-->
<!--    // datetime-->
<!--    $("datetime").datetimepicker({-->
<!--        format: 'hh:mm:ss a'-->
<!--    });-->
<!--</script>-->
</body>


</html>
