<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
	<div id='card'>
		<h1 id='title'>title</h1>
		<button id='options'>options</button>
		<div id='content'>
			<div class='content'>
				<p id='text'>content here</p>
				<button id='expandbutton'>expand</button>
			</div>
			<div class='content'>
				<p id='text'>more content here</p>
				<button id='expandbutton'>expand</button>
			</div>
			<div class='content'>
				<p id='text'>even more content here</p>
				<button id='expandbutton'>expand</button>
			</div>
		</div>
	</div>
	<div id='content'>
		<?php


			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$dbname = 'to_do';

			try{
			    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    

				echo '<script>console.log("';
			    echo "Connected successfully";
				echo '");</script>';
		    }
			catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
		    $sql = "SELECT card_id, title, background_color, content FROM cards";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();

		    while ($data = $stmt->fetch())
		    	echo '<p>' . $data["card_id"] . $data["title"] . $data["background_color"] . $data["content"] . '</p>';
		?>
	</div>
	<a href="new-card.php"><img border="0" alt="add" src="img/pictograms/plus-white.png" width="100" height="100"></a>
</body>
</html>