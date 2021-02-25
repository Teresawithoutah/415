<?php
session_start();

?>


<?php


//&& $_SESSION['UserUsername'])
if (isset($_SESSION['UserUsername'])) {
    ?> <!DOCTYPE html>
    <html lang="en">
<head>
  <title>Isopod Galore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.2;
    color: #818181;
    display: ;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  .company{
      font-size:100px;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  }
  .company2{
      font-size:20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }

  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }


  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }


  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  .parallax {
  /* The image used */
  background-image: url("Isopod-Ecommerce/img/isopod2.jpg");
    opacity: 0.8;
  /* Set a specific height */
  min-height: 650px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Isopod Galore</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">All Items</a></li>
        <li><a href="Isopod-Ecommerce/Catergories/apparel.php">Apparel</a></li>
        <li><a href="Isopod-Ecommerce/Catergories/homedecor.php">Home Decor</a></li>
        <li><a href="Isopod-Ecommerce/Catergories/plushies.php">Plushies</a></li>
        <li><a href="Isopod-Ecommerce/Catergories/accessories.php">Accessories</a></li>
        <li><a href="Isopod-Ecommerce/Catergories/pets.php">Pet Crustaceans</a></li>

      </ul>
       <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
        </button>

    </div>
  </div>
</nav>


   <div class="parallax">
  <p class="company">Isopod Galore</p> <br><br>
  <p class= "company2">We specialize in developing a centralized area and market to purchase Isopod related items and some real life crustaceans!</p>
  <form>
     </div>
      <!--- NOT SURE ABOUT THIS // SUBSCRIBE SECTION
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>


    </div>
  </form>
  -->



<div style="height:150px;">
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>

      <h4>We are dedicated to supporting those who love Isopods and desired a place to find all types of items that were designed with an isopod theme.<br> Isopods are any member of the order Isopoda (class Crustacea), which is a group of diverse, widely occurring forms including marine, freshwater, and terrestrial species. <br> <br>Find all your needs here, enjoy shopping! </h4>

      <h3> Search for items here</h3>
       <form action="results.php" method="post">
            <input name="searchterm" type="text" size="40">
            <input type="submit" name="submit" value="Search">
        </form>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-map-marker logo"></span>
    </div>
  </div>
</div>
</div>



</body>
</html><?php ;

}
else{
?> <!doctype html>

<head>

    <!-- Basics -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>

    <!-- CSS -->

    <link rel="stylesheet" href="login.css">


</head>
<body>

    <!-- Begin Page Content -->

    <div id="container">

        <form method="post" action="login.php">

            <label for="username">Username:</label>

            <input type="text" name="UserUsername">
        <input type="hidden" name="EmployeeUsername">

            <label for="password">Password:</label>


            <input type="hidden" name="EmployeePw">

            <input type="password" name="UserPw">

            <div id="lower">

             <a href="Isopod-Ecommerce/signup.html"> <input type="button" value="Customer Signup"></a>

                <input type="submit" value="Login">

      <a href="Isopod-Ecommerce/manager/adminsignup.html"> <input type="button" value="Admin Signup"></a>
            </div><!--/ lower-->

        </form>



    </div><!--/ container-->



    <!-- End Page Content -->

</body>

</html><?php
}


?>