<?php
include "connection.php";

error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $login=false;
    $showError=false;


    $email=$_POST["email"];
    $password=$_POST["password"];

//        $exits=false;

     $q = "select * from driversignup where email='$email' AND password='$password'";

    $query=mysqli_query($conn,$q);
//            print_r($query);die;
    $num = mysqli_num_rows($query);

    $user = mysqli_fetch_object($query);

    if($num == 1){
        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        $_SESSION["role"] = $user->role;
        header("location:parceldisplay.php");
    }

    else{
        $showError="Invalid credentials";

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
    <!--    <link style="style.css" href="css">-->
    <title>Driver Login</title>
</head>
<body>

<?php
if($login){
    echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> You are logged in .
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
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Driver Login</h1>
                        </div>
                    </div>
                    <form action="logindriver.php" method="post" name="login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                        </div>
                        <div class="col-md-12 text-center ">
                            <input type="submit" value="Login" class=" btn btn-block  btn-primary tx-tfm">
                             </div>

                        <div class="col-md-12 mb-3">
                            <p class="text-center">
                                <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                    </i> Signup using Google
                                </a>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Don't have account? <a href="signupdriver.php" id="signup">Sign up here</a></p>
                        </div>
                    </form>

                </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>


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