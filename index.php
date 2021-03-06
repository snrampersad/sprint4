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
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
         
          <div class="modal-body">
            <iframe src="https://d27cjw3bpde9bx.cloudfront.net/" frameborder="0" height="600px" width="100%"></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      </div>
    </div>
<nav class="navbar border border-primary " style="background-color: white; height: 10px;">
    <div class="container-fluid">
     
      <ul class="nav navbar-nav">
        <li><img src="https://i.ibb.co/Q6zXGvf/logo.jpg" width="90px"><bdi style="color: darkblue; font-size: 18px;"><strong>&nbsp;Loan Me</strong></bdi></img></li>
        <li class="active"><a href="#"><strong>Home</strong></a></li>
        <li><a href="#"><strong>About</strong></a></li>
        <li><a href="#"><strong>Services</strong></a></li>
        <li><a href="compare.php"><strong>Loans</strong></a></li>
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
   
<div class="container" style="padding-top: 10px;">
    <h3 style="text-align: center;font: Helvetica; color: darkblue;"><strong>Our Services</strong> </h3>
  <div class="row">
      <div class="col-sm-4">
            <div class="card" style="width: 40vh;margin:10px;">
                <img class="card-img-top" src="https://i.ibb.co/xJbv2yz/confused-better5.jpg" alt="Card image cap"style="width: 40vh;" >
            <div class="card-body">
               
                <h5 class="card-title" style="text-align: center; padding-top: 5px;"><strong>Learn</strong></h5>
                <p class="card-text" style="text-align: center; padding-left: 5px;padding-right: 5px;">Learn more about loans, FAQs, and view financial news and tips </p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info">View</button></div>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 40vh;margin:10px;">
                <img class="card-img-top" src="https://i.ibb.co/7KLzFNG/chatbot4.jpg" alt="Card image cap"style="width: 40vh;" >
                <div class="card-body">
                    
                <h5 class="card-title" style="text-align: center; padding-top: 5px;"><strong>Chatbot</strong></h5>
                <p class="card-text" style="text-align: center; padding-left: 5px;padding-right: 5px;">Talk to our chatbot for help finding loans and receiving recommendations</p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Chat</button></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 40vh;margin:10px;">
                <img class="card-img-top" src="https://i.ibb.co/Mc2f7ZZ/Personal-Loan-Myths-You-Should-Ignore-1200.png" alt="Card image cap"style="width:40vh;" >
                <div class="card-body">
                    
                <h5 class="card-title" style="text-align: center; padding-top: 5px;"><strong>Compare Loans</strong></h5>
                <p class="card-text" style="text-align: center; padding-left: 5px;padding-right: 5px;">Compare detailed loan options recommended for you</p>
                <div class="text-center" style="padding-bottom: 5px;"><button type="button" class="btn btn-info">View</button></div>
                </div>
            </div>
        </div>
    </div>
         
</div>
</div>
</body>
</html>
