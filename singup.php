<?php
error_reporting(0);
    if($_SERVER["REQUEST_METHOD"]=="POST") {
    $showAlert=false;
    $showError=false;
    $conn=null;
        include "connection.php";
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $role=$_POST["role"];
//        $exits=false;
        if($password==$cpassword ){
            $q = "INSERT INTO `signup` ( `firstname`, `lastname`, `email`, `password`, `cpassword`, `role`) VALUES ( '$firstname', '$lastname', '$email', '$password', '$cpassword', '$role')";
//            $q = "INSERT INTO `signup` ('firstname', 'lastname', 'email', 'password', 'cpassword') VALUES ('$firstname', '$lastname', '$email', '$password', '$cpassword')";
//           echo  $q;die;

            $query=mysqli_query($conn,$q);
//            print_r($query); die;
            if($query){
                $showAlert=true;
                header("location:login.php");

            }
        }
        else{
            $showError="password do not match";

        }
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer Signup</title>
</head>
<body>
<?php
if($showAlert){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> Your account is created successfully and login now.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
if($showError){
echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error !</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">

            <div id="second">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Customer Signup</h1>
                        </div>
                    </div>
                    <form action="#" name="registration" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Confirm Password">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <input type="role" name="role" id="role"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Role">
                            <p class="text">Make sure to type the same password </p>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
