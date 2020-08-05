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
        
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      </ul>
    </div>
  </nav>
<body style="background-color: white;">
    <h2>Compare Loans</h2>
    <form action="compare.php">
        <input type="checkbox" name="loan">
    </form>

    <?php 
        $loanType = $company = $companyType = $rate = " ";
        if(empty($_POST['loan']))
            $sql = "SELECT * from companies";
        else
            $sql = "SELECT * from companies WHERE coLoanType = 'Home Loan'";

        $result = mysqli_query($conn, $sql);

        echo "<table border='1' style='margin: 10px;' class='table table-striped'>
        <tr>
        <th>Company</th>
        <th>Company Type</th>
        <th>Loan Type</th>
        <th>Loan Rate</th>
        <th>Loan Term</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['coName'] ."</td>";
            echo "<td>" . $row['coType'] . "</td>";
            echo "<td>" . $row['coLoanType'] . "</td>";
            echo "<td>" . $row['coRate'] . "</td>";
            echo "<td>" . $row['loanTerm'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
                    
        
    ?>
</body>
</html>
