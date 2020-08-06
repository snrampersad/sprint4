<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $db = "loanshark";

    $conn = new mysqli($servername, $username, $pass, $db) or die("Connect failed: %s\n". $conn -> error);
?>