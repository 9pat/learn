<?php
    $servername = "localhost";
    $username = "tester";
    $password = "tester";
    $db = "pat_test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    //header('Content-Type: charset=utf-8');
    mysqli_set_charset($conn, "utf8");

    echo "<p>Connected successfully </p>";
?> 