<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = 'to_do';

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    echo '<script>console.log("';
    echo "database '" . $dbname . "' Connected successfully";
    echo '");</script>';
    return $pdo;
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}