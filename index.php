<?php
  require_once 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<style>
    body, html {
      height: 100%;
      margin: 0;
    }
    
    .bg {
        image-rendering: crisp-edges;
        -ms-interpolation-mode: nearest-neighbor;
      /* The image used */
      /* background-image: url("https://i.ibb.co/m4FHMGY/financial-modeling-skills-kpmg.jpg"); */
      background-image: url("https://i.ibb.co/9qFpJt5/blue-finance2.png");
      
      /* Full height */
      height: 60%; 
    
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .centered {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 40px;
        font: Helvetica;
    }
    .navbar-nav > li{
  padding-left:20px;
  padding-right:20px;
}
ul.nav a:hover { background-color: #fff !important; }
    
    </style>
<nav class="navbar border border-primary " style="background-color: white; height: 10px;">
    <div class="container-fluid">
     
      <ul class="nav navbar-nav">
        <li><a href="#">Logo</a></li>
        <li class="active"><a href="#"><strong>Home</strong></a></li>
        <li><a href="#"><strong>About</strong></a></li>
        <li><a href="#"><strong>Services</strong></a></li>
        <li><a href="#"><strong>Loans</strong></a></li>
        <li><a href="#"><strong>Contact Us</strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      </ul>
    </div>
  </nav>
<body style="background-color: white;">
    <div class="bg">
        <div class="centered">Your Loan Options, In One Place</div>
    </div>
    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://i.ibb.co/LPkBhhS/Business-financial-concept-busines-sman-and-partner-pointing-graph-paper-are-meeting-to-plan-sales-t.jpg" alt="First slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://i.ibb.co/m4FHMGY/financial-modeling-skills-kpmg.jpg" alt="First slide">
          </div>
          
        </div>
      </div> -->
<div class="container" style="padding-top: 10px;">
    <h3 style="text-align: center;font: Helvetica; color: darkblue;"><strong>Our Services</strong> </h3>
  <div class="row">
      <div class="col-sm-4">
            <div class="card" style="width: 50vh;">
                <img class="card-img-top" src="https://i.ibb.co/JqNj7Vd/chatbot-chat-application-artifi.jpg" alt="Card image cap"style="width: 50vh;" >
            <div class="card-body">
               
                <h5 class="card-title" style="text-align: center; padding-top: 5px;">Learn</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. </p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info">Info</button></div>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 50vh;">
                <img class="card-img-top" src="https://i.ibb.co/JqNj7Vd/chatbot-chat-application-artifi.jpg" alt="Card image cap"style="width: 50vh;" >
                <div class="card-body">
                    
                <h5 class="card-title" style="text-align: center; padding-top: 5px;">Chatbot</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. </p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info">Info</button></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 50vh;">
                <img class="card-img-top" src="https://i.ibb.co/JqNj7Vd/chatbot-chat-application-artifi.jpg" alt="Card image cap"style="width:50vh;" >
                <div class="card-body">
                    
                <h5 class="card-title" style="text-align: center; padding-top: 5px;">Compare Loans</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. </p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info">Info</button></div>
                </div>
            </div>
        </div>
    </div>
         
</div>
</div>
</body>
</html>