<?php 

    $servername = "sql311.epizy.com";
    $username = "epiz_26858345";
    $password = "sDSrZXIiIRBRT";
    $dbname = "epiz_26858345_loginprotocol";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>