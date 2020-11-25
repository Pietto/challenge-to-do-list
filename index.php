<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
	<?php
		include "database/connect.php";
	?>





	<div>
		<a href="www.google.com"><h2>naam van het bord</h2></a>

		<div id='row1' class='primary_rows'>
			<h3>title 1 goes brrrrrrrrrr</h3>
			<div class='cards'>
				<div>
					<p>create buttons</p>
				</div>
				<div>
					<p>try the buttons</p>
				</div>
				<div>
					<p>shit on buttons</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
			</div>
			<div id='0' class='add_card_button' onclick='addCard("title 1","description 1")'>
				<p> + kaart toevoegen</p>
			</div>
		</div>

		<div id='row2' class='primary_rows'>
			<h3>title 2 goes brrrrrrrrrr</h3>
			<div class='cards'>
				<div>
					<p>create buttons</p>
				</div>
				<div>
					<p>try the buttons</p>
				</div>
				<div>
					<p>shit on buttons</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
			</div>
			<div id='0' class='add_card_button' onclick='addCard("title 2","description 2")'>
				<p> + kaart toevoegen</p>
			</div>
		</div>
		
		<div id='row3' class='primary_rows'>
			<h3>title 3 goes brrrrrrrrrr</h3>
			<div class='cards'>
				<div>
					<p>create buttons</p>
				</div>
				<div>
					<p>try the buttons</p>
				</div>
				<div>
					<p>shit on buttons</p>
				</div>
				<div>
					<p>buttons is my favourite cat in the whole world, his favourite food is bacon and my dads shoes.</p>
				</div>
			</div>
			<div id='0' class='add_card_button' onclick='addCard("title 3","description 3")'>
				<p> + kaart toevoegen</p>
			</div>
		</div>
	</div>



	<div id='overlay' onclick='closePopup()'>
		<div id='create_popup' class='popup'>
			<div id='header'>
				<img src='img/unknown.svg' class='icon'>
				<input id='title' type='text' value='Title goes here again'></input>
			</div><br>
			<div id='content'>
				<img src='img/unknown.svg' class='icon'>
				<input id='description_alt' type='text' disabled value='omschrijving'>:</input>
			</div><br>
			<button>commit</button>
		</div>
	</div>






	<script src="script/script.js"></script>
</body>
</html>
