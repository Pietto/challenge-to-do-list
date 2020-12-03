<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = 'backend';

try{
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO cards (name, description, status, done, length, list_id) VALUES ('day 2.5', 'this is the description of day 2, nothjing special', 'pending', true, 2, 7)";
    $conn->exec($sql);
    echo "<script>console.log('created successfully');</script>";

}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}