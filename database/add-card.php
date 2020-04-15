<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$title = $_POST['title'];
	$backgroundColor = $_POST['backgroundColor'];
	$content = $_POST['content'];

	if (empty($_POST["title"]) || empty($_POST["backgroundColor"]) || empty($_POST['content'])){
		echo "<script>alert('You didn\'t fill in all reqiered required')</script>";
	}else{
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$dbname = "to_do";

		try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO cards (title, background_color, content) VALUES ('$title', '$backgroundColor', '$content')";
			$conn->exec($sql);

			echo '<script>window.open("index.php", "_self")</script>';
		}
		catch(PDOException $e){
     		echo "Connection failed: " . $e->getMessage();
		}
	}
}