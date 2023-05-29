<?php
error_reporting(0);
$conn=null;
include "connection.php";

if(isset($_POST['done'])){
    $id=$_POST["id"];
    $id = $_GET['id'];

    $senderaddress=$_POST["senderaddress"];
    $receiveraddress=$_POST["receiveraddress"];
    $mobile=$_POST["mobile"];
    $weight=$_POST["weight"];
    $distance=$_POST["distance"];
    $time=$_POST["time"];
    $amount=$_POST["amount"];


    $q =   "UPDATE parceldetail SET senderaddress='$senderaddress', receiveraddress='$receiveraddress', mobile='$mobile', weight='$weight', distance='$distance', time='$time', amount='$amount' where id=$id;" ;

//    $servername = "localhost";
//    $username = "root";
//    $password = "";
//    $conn = mysqli_connect($servername, $username, $password);
    $query= mysqli_query($conn,$q);
    header('location:parceldisplay.php');
}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Parcel Changing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">
        <br><br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">  Parcel Change </h1>
            </div><br>
            <!--                   <label> Id </label>-->
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" class="form-control">

            <label> Sender Address </label>
            <input type="text" name="senderaddress"  id="senderaddress" value="<?php echo $_REQUEST['senderaddress']; ?>" class="form-control">

            <label> Receiver Address </label>
            <input type="text" name="receiveraddress" id="receiveraddress"  value="<?php echo $_REQUEST['receiveraddress']; ?>" class="form-control">

            <label> Mobile </label>
            <input type="text" name="mobile" id="mobile" value="<?php echo $_REQUEST['mobile']; ?>" class="form-control">

            <label> Weight </label>
            <input type="text" name="weight" id="weight" value="<?php echo $_REQUEST['weight']; ?>" class="form-control">

            <label> Distance </label>
            <input type="text" name="distance" id="distance" value="<?php echo $_REQUEST['distance']; ?>" class="form-control">

            <label> Time </label>
            <input type="text" name="time" id="time" value="<?php echo $_REQUEST['time']; ?>" class="form-control">


            <label> Amount </label>
            <input type="text" name="amount" id="amount" value="<?php echo $_REQUEST['amount']; ?>" class="form-control">

            <button class="btn btn-success" type="submit" name="done" id="done"> submit </button>
        </div>

    </form>
</div>
</body>
</html>

