<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
	<?php
		include 'database/connect.php';
		var_dump($pdo);

		$lists_qry = 'SELECT * FROM lists';
		$lists_stmt = $pdo->prepare($lists_qry);
		$lists_stmt->execute();
		$lists = $lists_stmt->fetchAll();

		$cards_qry = 'SELECT * FROM cards';
		$cards_stmt = $pdo->prepare($cards_qry);
		$cards_stmt->execute();    
		$cards = $cards_stmt->fetchAll();
	?>


	<!-- <div>
		<a href="www.google.com"><h2>naam van het bord</h2></a>

		<div class='primary_rows'>
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

		<div class='primary_rows'>
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
		
		<div class='primary_rows'>
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


		<div class='primary_rows'>
			<div class='add_list_button' onclick='openListPopup()'>
				<p> + lijst toevoegen</p>
			</div>
		</div>
	</div> -->

	<div>
<?      foreach($lists as $list){ ?>
        <div class='lists'>
            <h3><?= $list['title']?></h3>
            <div class='cards'>
<?          foreach($cards as $card){ ?>    
                <div id='card'>
                    <p><?= $card['name'] ?></p>
                </div>
<?              } ?>
            </div>
            <div class='add_card_button' onclick='openCardForm()'>
                <p> + add card</p>
            </div>
        </div>
<?        } ?>
        <div class='lists primary_rows add_list_button'>
            <div class='add_list_button' onclick='openListForm()'>
                <p> + add list</p>
            </div>
        </div>
    </div>

    <div id='list_overlay'>
        <div id='create_popup' class='popup'>
            <button class='close' aria-label='Close' onclick='closeListForm()'></button>
            <form action='list_create.php' method='post'>
                <h3>Create List</h3>
                <input type='text' name='title' placeholder='title' /><br><br>
                <input type='hidden' name='id' value='<?= $lists['id'] ?>' />
                <input type='submit' />
            </form>
        </div>
    </div>

    <div id='card_overlay'>
        <div id='create_popup' class='popup'>
            <button class='close' aria-label='Close' onclick='closeCardForm()'></button>
            <form action='card_create.php' method='post'>
                <h3>Create Card</h3>
                <input type='text' name='name' placeholder='name' /><br>
                <input type='text' name='description' placeholder = 'description' /><br><br>
                <input type='hidden' name='id' value='<?= $cards['id'] ?>' />
                <input type='submit' />
            </form>
        </div>
    </div>



	<!-- <div id='overlay_add_card'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closePopup()'></button>
			<div id='header'>
				<img src='img/pictograms/pen.svg' class='icon'>
				<input class='title' type='text' value='' placeholder='titel'></input>
			</div><br>
			<div id='content'>
				<img src='img/pictograms/lines.svg' class='icon'>
				<input class='description_alt' type='text' disabled value='omschrijving'>:</input>
			</div><br>
			<button id='commit'>create</button>
		</div>
	</div>


	<div id='overlay_add_List'>
		<form action='database/lists/list_create.php' id='create_popup' class='popup' method='post'>
			<button class='close' aria-label='Close' onclick='closePopup()'></button>
			<div id='header'>
				<img src='img/pictograms/pen.svg' class='icon'>
				<input class='title' type='text' value='' placeholder='titel' name='title'></input>
				<input type='hidden' name='id' value=''/>
			</div>
			<button id='commit' type='submit'>create</button>
		</form>
	</div> -->






	<script src="script/script.js"></script>
</body>
</html>