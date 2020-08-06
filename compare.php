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
        <li><a href="index.php"><strong>Home</strong></a></li>
        <li><a href="#"><strong>About</strong></a></li>
        <li><a href="#"><strong>Services</strong></a></li>
        <li class="active"><a href="#"><strong>Loans</strong></a></li>
        <li><a href="#"><strong>Contact Us</strong></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="account.php"><span class="glyphicon glyphicon-user"></span>Account</a></li>
      </ul>
    </div>
  </nav>
<body style="background-color: white;">
    <h2>Compare Loans</h2>
    <body>
      <div class="container" style="padding-top: 10px;">
         <h1>Compare Loan Options</h1>
         <div class="row">
            <form >
               <div class="form-row ">
                  <div class="form-group col-lg-2">
                     <label for="creditScore">Credit Score</label>
                     <select class="form-control" id="creditScore">
                        <option value=850>Excellent(720-850)</option>
                        <option value=719> Good(690-719)</option>
                        <option value=689>Fair(630-689)</option>
                        <option value=629>Bad(350-629)</option>
                     </select>
                  </div>
                  <div class="form-group col-lg-2">
                     <label for="loanType">Loan Type</label>
                     <select class="form-control" id="loanType">
                        <option>Debt Consolidation</option>
                        <option>Credit card refinancing </option>
                        <option>Vacation</option>
                        <option>Business</option>
                        <option>Moving</option>
                        <option>Home improvement</option>
                        <option>Emergency Expense</option>
                        <option>Other</option>
                     </select>
                  </div>
                  <div class="form-group col-lg-2">
                     <label for="companyType">Company Type</label>
                     <input class="form-control" id="companyType"></input>
                  </div>
                  <div class="form-group col-lg-2">
                     <label for="loanRate">Loan Rate</label>
                     <input class="form-control" id="loanRate"></input>
                  </div>
                  <div class="form-group col-lg-2">
                     <label for="loanTerm">Loan Term</label>
                     <select class="form-control" id="loanTerm">
                        <option value= 1>1 year</option>
                        <option value= 2>2 years</option>
                        <option value=3 >3 years</option>
                        <option value=4 >4 years</option>
                        <option value=5 >5 years</option>
                        <option value=10 >10 years</option>
                        <option value=20 >20 years</option>
                        <option value=30 >30 years</option>
                     </select>
                  </div>
                  <div class="col-auto">
                     <button type="button" class="btn btn-primary" style="position: relative; top: 25px; left: 10px;" onclick="onClick()">
                        Submit
                     </button>
                  </div>
               </div>
            </form>
         </div>
         <div class="row" id="displayCards">
         </div>
      </div>
   </body>
   <script type = "text/javascript" src = "loans.js" ></script>
</body>
</html>
