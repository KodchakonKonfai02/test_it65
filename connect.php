<?php
    $servername = "localhost";
    $username = "it65309010001";
    $password = "it12345";
    $dbname = "it65309010001";

    $username = "root";
    $password = "12345678";
    $dbname = "wed2111";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>