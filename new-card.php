<?php
	include 'database/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>add card</title>
</head>
<body>

	<?php
		include 'database/add-card.php';
	?>
	<a href="index.php">go back</a>
	<form method="POST">
		<br>
		Title: <input type="text" name="title" id="text-input" value='<?php echo $_POST['title']; ?>' required><br><br>
		Background color: 
		<select id="backgroundColor-input" name="backgroundColor">
		    <option style='color: white' value="white">white</option>
		    <option style='color: pink' value='pink'>pink</option>
		    <option style='color: red' value="red">red</option>
		    <option style='color: green' value="green">green</option>
		    <option style='color: rgb(45, 255, 0);' value='lime green'>lime green</option>
		    <option style='color: rgb(0, 255, 215)' value='baby blue'>baby blue</option>
		    <option style='color: blue' value="blue">blue</option>
		    <option style='color: yellow' value='yellow'>yellow</option>
		    <option style='color: orange' value='orange'>orange</option>
		    <option style='color: purple' value='purple'>purple</option>
	  	</select><br><br>
		content: <input type="text" name="content" id="content-input" value='<?php echo $_POST['content']; ?>' required><br><br>
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>



<?php
// $servername = "localhost";
// $username = "root";
// $password = "mysql";
// $dbname = 'to_do';

// try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//     $sql = "INSERT INTO cards (title, background_color, content)
//     VALUES ('a', 'b', 'c')";

// 	// echo '<script>console.log("';
// 	$conn->exec($sql);
//     echo "connected successfully";
// 	// echo '");</script>';
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
?>