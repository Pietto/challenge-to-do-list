<?php
	include 'database/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>add card</title>
</head>
<body>
	<a href="index.php">go back</a>
	<form>
		<input type="text" name="text-input" id="text-input-id">
		<input type="submit" name="submit">
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
			echo 'ad';
		}
	?>
</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = 'to do list';

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO Todo (title, background color, content)
    VALUES ('a', 'b', 'c')";

	// echo '<script>console.log("';
	$conn->exec($sql);
    echo "added successfully";
	// echo '");</script>';
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>