
<?php

include "connection.php";
error_reporting(0);
$id="null";
//    $id=$_POST["id"];
//    $username=$_POST["username"];
//    $password=$_POST["password"];

$q = "select * from parceldetail";




$query = mysqli_query($conn,$q);
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Parcel Detail Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-12">
        <br><br>



        <h1 class="text-center"> Parcel Detail </h1><br>
        <div class="btn-group" role="group" aria-label="Basic example">

            <?php if($_SESSION['role']=='customer'): ?>
            <button  class="btn-outline-primary btn" class="text-white"> <a href="parcelorder.php"> Parcel Order</a> </button>
            <?php endif; ?>

            <button  class="btn-outline-primary btn" class="text-white"> <a href="mail.php"> Contact By Mail</a> </button>
        </div>



        <table class="table table-striped table-hover table-bordered">
            <tr class="bg-dark text-white text-center">
                <th> Id</th>
                <th> Sender Address</th>
                <th> Receiver Address</th>
                <th> Mobile Number</th>
                <th> Weight</th>
                <th> Time</th>
                <th> Distance</th>
                <th> Amount</th>
                <?php if($_SESSION['role']=='customer'): ?>
                    <th> Cancel</th>
                    <th> Change</th>
                <?php endif; ?>

                <?php if($_SESSION['role']=='driver'): ?>
                    <th> Deliver</th>
                <?php endif; ?>
            </tr>
            <?php
            // echo '<pre>';
            // print_r($_SESSION);
            //echo '</pre>';
            $q = "select * from parceldetail";
            $query = mysqli_query($conn,$q);
            while($res=mysqli_fetch_array($query)){


                ?>

                <tr class="text-center">
                    <td> <?php echo $res ['id']; ?>    </td>
                    <td> <?php echo $res ['senderaddress']; ?>    </td>
                    <td> <?php echo $res ['receiveraddress']; ?>    </td>
                    <td> <?php echo $res ['mobile']; ?>    </td>
                    <td> <?php echo $res ['weight']; ?>    </td>
                    <td> <?php echo $res ['time']; ?>    </td>
                    <td> <?php echo $res ['distance']; ?></td>
                    <td> <?php echo $res ['amount']; ?></td>


                    <?php if($_SESSION['role']=='customer'): ?>

                        <td> <button class="btn-danger btn"> <a href="parcelcancel.php?id=<?php echo $res ['id']; ?>" class="text-white">Cancel</a> </button></td>

                        <td> <button class="btn-primary btn"> <a href="parcelchanging.php?id=<?php echo $res ['id']; ?>&senderaddress=<?php echo $res ['senderaddress']; ?>&receiveraddress=<?php echo $res ['receiveraddress']; ?>&mobile=<?php echo $res ['mobile']; ?>&weight=<?php echo $res ['weight']; ?>&distance=<?php echo $res ['distance']; ?>&time=<?php echo $res ['time']; ?>&amount=<?php echo $res ['amount']; ?>" class="text-white">Change</a> </button></td>
                    <?php endif; ?>
                    <?php if($_SESSION['role']=='driver'): ?>
                        <td> <button class="btn-danger btn"> <a href="parcelcancel.php?id=<?php echo $res ['id']; ?>" class="text-white">Deliver</a> </button></td>
                    <?php endif; ?>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>

</div>

</body>
</html>