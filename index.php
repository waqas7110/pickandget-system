
<?php

error_reporting(0);
if(isset($_POST['esubmit'])){
    $to = "m.waqas7110@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
//    $headers = "From : $from";

    mail($to , $subject , $message );
    echo "mail sent.";

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>peck&get</title>
    <style>
        .dropbtn {
            background-color: #fff;
            color: #212529;
            padding: 8px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
             /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ff4d29;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #ff4d29;}




        </style>
        </head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


<!-- TOP NAV -->
<div class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p><i class='bx bxs-envelope'></i> peck&get@gmail.com</p>
                <p><i class='bx bxs-phone-call'></i> 0340-3506080</p>
            </div>
            <div class="col-auto social-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-pinterest'></i></a>
            </div>
        </div>
    </div>
</div>

<!-- BOTTOM NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <div class="col-md-2 col-xs-9">
        <img src="img/main.png" class="img-fluid"></div>
    <!--            <a class="navbar-brand" href="#">Peck&Get<span class="success">.</span></a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#blog">Tracking</a>
            </li>
            <li class="nav-item">

                <div class="dropdown">
                    <a class="nav-link" href="#">Login</a>
<!--                    <button class="dropbtn">Login</button>-->
                    <div class="dropdown-content">
                        <a  href="login.php">Customer</a>
                        <a href="logindriver.php">Driver</a>
<!--                        <a href="#">Link 3</a>-->
                    </div>
                </div>
            </li>
        </ul>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
    </div>
    </div>
</nav>

<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white text-center">
                    <h6 class="text-white text-uppercase">Efficient, Every time, All the time</h6>
                    <h1 class="display-3 my-4">Pick and Get <br/>System</h1>
<!--                    <a href="#" class="btn btn-brand">Get Started</a>-->
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>

                </div>
            </div>
        </div>
    </div>
    <div class="slide slide2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white text-center">
                    <h6 class="text-white text-uppercase">Efficient, Every time, All the time</h6>
                    <h1 class="display-3 my-4">Pick and Get <br/>System</h1>
<!--                    <a href="#" class="btn btn-brand">Get Started</a>-->
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slide slide3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white text-center">
                    <h6 class="text-white text-uppercase">Efficient, Every time, All the time</h6>
                    <h1 class="display-3 my-4">Pick and Get <br/>System</h1>
<!--                    <a href="#" class="btn btn-brand">Get Started</a>-->
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slide slide4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white text-center">
                    <h6 class="text-white text-uppercase">Efficient, Every time, All the time</h6>
                    <h1 class="display-3 my-4">Pick and Get <br/>System</h1>
<!--                    <a href="#" class="btn btn-brand">Get Started</a>-->
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slide slide5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white text-center">
                    <h6 class="text-white text-uppercase">Efficient, Every time, All the time</h6>
                    <h1 class="display-3 my-4">Pick and Get <br/>System</h1>
<!--                    <a href="#" class="btn btn-brand">Get Started</a>-->
                    <a href="#" class="btn btn-outline-light ms-3">Our work</a>
                </div>
            </div>
        </div>
    </div>




</div>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 py-5">
                <div class="row">

                    <div class="col-12">
                        <div class="info-box">
                            <img src="img/icons7.png" alt="">
                            <div class="ms-4">
                                <h5>Customer Caring</h5>
                                <p>To love our customer and deliver equality.Everything at your doorstep. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="img/icons8.png" alt="">
                            <div class="ms-4">
                                <h5>Selection</h5>
                                <p>Development of our employees in a merit based culture.Your courier partner. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="img/icons9.png" alt="">
                            <div class="ms-4">
                                <h5>Lawful</h5>
                                <p>Lawful in every respect.True to service.Hassle-free delivery with us. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/about2.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- MILESTONE -->
<section id="milestone">
    <div class="container">
        <div class="row text-center justify-content-center gy-4">
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">90K+</h1>
                <p class="mb-0">Happy Clients</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">45M</h1>
                <p class="mb-0">Services Location</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">190</h1>
                <p class="mb-0">Fleet</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">380K</h1>
                <p class="mb-0">Express Center</p>
            </div>
        </div>
    </div>
</section>

<!.... SERVICES...>

<section id="services" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Our Services</h6>
                    <h1>What We Do?</h1>
                    <p class="mx-auto">We are belief on Efficient, Every time, All the time. Order,Receive And Enjoy.Care with Speed.
                        Fast, Flexible, Friendly.
                        As Fast as Possible.
                        New Concept to Delivery.
                        We Make Your Life Easier.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i1.png" alt="">
                    <h5>P&G Cargo</h5>
                    <p>P&G Cargo offers highly economical and reliable road transportation for
                        heavy-weight and large volume shipments.P&G Cargo caters to a wide range of walk-in customers and
                        including wholesalers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i2.png" alt="">
                    <h5>Heavy Weight Delivery</h5>
                    <p>With P&G, you’ve got a range of options for your important export and
                        import heavy shipments. We make it quick and easy to find out exactly
                        how to get your shipment ready, tracked and monitored.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i3.png" alt="">
                    <h5>Mail Management System</h5>
                    <p>P&G offers a complete printing solution from data receiving,
                        to designing and formatting as per the customer’s requirement.
                        P&G is proud to be Pakistan’s fastest digital facility. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i4.png" alt="">
                    <h5>Self Service Centre</h5>
                    <p>Our Self-Service Centre allows shippers to make changes to their existing orders,
                        their courier and to set reminders to pick up their shipment from their courier.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i4.png" alt="">
                    <h5>Tracking Tools</h5>
                    <p> P&G has now introduced a
                        system which will automatically send tracking numbers and tracking URLs to your
                        receivers so you may focus more on your business.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="img/i6.png" alt="">
                    <h5>P&G Cool Control</h5>
                    <p>P&G Cool Control is a unique temperature-controlled delivery service that allows for the
                        transport of temperature sensitive products.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Work</h6>
                    <h1>Successful projects</h1>
                    <p class="mx-auto">These projects are also like our customers, we are help our customer in these projects. </p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
        <div class="project">
            <div class="overlay"></div>
            <img src="img/portfolio12.jpg" alt="">
            <div class="content">
                <h2>Sense Angle</h2>
                <h6>P&G sense angle continues to strengthen relationships and spread happiness by allowing people to send gifts, cakes and flowers to Pakistan.</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/project2.jpg" alt="">
            <div class="content">
                <h2>Consulting Marketing</h2>
                <h6>We are also provide our customers a skilful marketing team which guide of market condition. </h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/portfolio3.jpg" alt="">
            <div class="content">
                <h2>Developer Team</h2>
                <h6>We are also provide our customers a skilful developer team which develop your projects.</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/portfolio4.jpg" alt="">
            <div class="content">
                <h2>Seminars</h2>
                <h6>P&G is an enterprise specializing in Corporate Trainings & Workshops, Seminars, Conferences, Publications and Ancillary Management Services.</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/portfolio5.png" alt="">
            <div class="content">
                <h2>Fast Delivery</h2>
                <h6>We also provide shopping like grocery type, in which we delivered products  in few minutes.</h6>
            </div>
        </div>
    </div>
</section>
<!--<  team  >-->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Team</h6>
                    <h1>Team Members</h1>
                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="image">
                        <img src="img/javaid.png" alt="">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <h5>Javaid Iqbal</h5>
                    <p>Founder and Chairman</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="image">
                        <img src="img/waqas2.png" alt="">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <h5>Muhammad Waqas</h5>
                    <p>President and Software engineer</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="image">
                        <img src="img/zainab1.png" alt="">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <h5>Zainab Ibrahim</h5>
                    <p>Director and Financial officer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light" id="reviews">

    <div class="owl-theme owl-carousel reviews-slider container">
        <div class="review">
            <div class="person">
                <img src="img/javaid.png" alt="">
                <h5>Javaid Iqbal</h5>
                <small>Founder and Chairman</small>
            </div>
            <h3>CEO/Chief Data Scientist at JTech. Former Developer .NET Developer at Chiltan Technologies.
            Studies at Superior University Gold Campus.</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="img/waqas2.png" alt="">
                <h5>Muhammad Waqas</h5>
                <small>President and Software engineer</small>
            </div>
            <h3>Working knowledge of HTML5, CSS3 and PHP.Ability to turnaround artwork quickly on short notice.
                Master in computer science from Superior University Gold Campus.</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="img/zainab1.png" alt="">
                <h5>Zainab Ibrahim</h5>
                <small>Director and Financial officer</small>
            </div>
            <h3>Working knowledge of HTML5, CSS3 and PHP.Ability to turnaround artwork quickly on short notice.
                Master in computer science from Superior University Gold Campus.</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="intro">

                       <h1 class="text-danger">Track Your Shipment</h1>
                    <h7>Enter any combination of P&G tracking Reference id number (one per line).</h7>
<!--                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has-->
<!--                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>-->


                    <div class="col-12">
                        <label for="userName" class="form-label">Tracking Id Number </label>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13612.866463917675!2d74.34701655!3d31.463226900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1673889681390!5m2!1sen!2s"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">Pick and Get</span></h4>
                    <p>To love our customer and deliver equality.Everything at your doorstep.</p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">Copyright@2022s. All rights Reserved</p>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                             style="background-image: url(img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div>
                                    <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">First name</label>
                                    <input type="text" class="form-control" placeholder="Muhammad" id="userName"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Last name</label>
                                    <input name="subject" type="text" class="form-control" placeholder="Waqas" id="userName"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="waqas@example.com"
                                           id="userName"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                    <textarea name="message" placeholder="This is looking great and nice." class="form-control"
                                              id="" rows="4"></textarea>
                                </div>

                                <div class="col-12">
                                    <button name="esubmit" type="submit" class="btn btn-brand">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>

</html>













