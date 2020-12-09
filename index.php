<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
	<?php
		include "database/connect.php";
		include "database/create.php";
	?>


	<div>
		<a href="www.google.com"><h2>naam van het bord</h2></a>

		<div id='row1' class='primary_rows'>
			<h3>title 1 goes brrrrrrrrrr</h3>
			<div class='cards'>
				<div onclick='openPopup("create buttons", 1)'>
					<p class='smolPP'>create buttons</p>
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
			<div class='add_card_button' onclick='openPopup("title 1","description 1")'>
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
			</div>
			<div class='add_card_button' onclick='openPopup("title 2","description 2")'>
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
			<div class='add_card_button' onclick='openPopup("title 3","description 3")'>
				<p> + kaart toevoegen</p>
			</div>
		</div>


		<div id='fakeRow' class='primary_rows'>
			<div class='add_list_button' onclick='openListPopup()'>
				<p> + lijst toevoegen</p>
			</div>
		</div>
	</div>





	<div id='overlay_add_card'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closePopup()'></button>
			<div id='header'>
				<img src='img/pictograms/pen.svg' class='icon'>
				<input id='title' type='text' value='' placeholder='titel'></input>
			</div><br>
			<div id='content'>
				<img src='img/pictograms/lines.svg' class='icon'>
				<input id='description_alt' type='text' disabled value='omschrijving'>:</input>
			</div><br>
			<button id='commit'>commit</button>
		</div>
	</div>


	<div id='overlay_add_List'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closePopup()'></button>
			<div id='header'>
				<img src='img/pictograms/pen.svg' class='icon'>
				<input id='title' type='text' value='' placeholder='titel'></input>
			</div><br>
			<div id='content'>
				<img src='img/pictograms/lines.svg' class='icon'>
				<input id='description_alt' type='text' disabled value='omschrijving'>:</input>
			</div><br>
			<button id='commit'>commit</button>
		</div>
	</div>






	<script src="script/script.js"></script>
</body>
</html>