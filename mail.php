
<?php


error_reporting(0);

if(isset($_POST['esubmit'])){
    $to = "m.waqas7110@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
   // $headers = "From : $from";

    mail($to , $subject , $message );
    echo "mail sent.";

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

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="card">
            <div class="card-header bg-dark"><br><br>
                <h1 class="text-white text-center"> Touch With Parcel </h1>
            </div>
            <!--                   <label> Id </label>-->
            <!--                   <input type="text" name="id" class="form-control"><br>-->


            <label> Full Name </label>
            <input type="text" name="subject" placeholder="Muhammad Waqas" id="senderaddress"  class="form-control">

            <label> Email/Contact </label>
            <input type="text" name="email" placeholder="m.waqas7110@gmail.com" id="receiveraddress"  class="form-control">

            <label> Message </label>
            <input type="text" name="message" placeholder="location/other detail" id="mobile" class="form-control">



            <button class="btn btn-success "  type="submit"  name="esubmit"> Send </button>

        </div>
        <p>Please enter all correct information.Thanks </p>
    </form>
</div>

</body>


</html>







