<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel='stylesheet' type='text/css' href='styles/index.css'>
</head>
<body>
	<?
	include 'database/connect.php';

	$lists_qry = 'SELECT * FROM lists';
	$lists_stmt = $pdo->prepare($lists_qry);
	$lists_stmt->execute();
	$lists = $lists_stmt->fetchAll();

	$cards_qry = 'SELECT * FROM cards';
	$cards_stmt = $pdo->prepare($cards_qry);
	$cards_stmt->execute();	
	$cards = $cards_stmt->fetchAll();

	?>

	<div>
<?      foreach($lists as $list){ ?>
        	<div class='lists'>
				<h3><?= $list['title']?></h3>

				<div class="dropdown" id='status_dropdow'>
					<p onclick="openStatusDropdown()" class="dropbtn">Filter status</p>
					<div id="dropdown_content_status" class="dropdown-content">
						<a href="#index.php">all</a>
						<a href="#index.php?filter=todo">to do</a>
						<a href="#index.php?filter=doing">doing</a>
						<a href="#index.php?filter=done">done</a>
					</div>
				</div>
				<div class="dropdown" id='length_dropdow'>
					<p onclick="openLengthDropdown()" class="dropbtn">sort by length</p>
					<div id="dropdown_content_length" class="dropdown-content">
						<a href="#index.php?sort=timeCreated">by time created</a>
						<a href="index.php?sort=short_long">short-long</a>
						<a href="#index.php?sort=long_short">long-short</a>
					</div>
				</div>


        	    <div class='cards'>
<?      	    foreach($cards as $card){ ?>
        	    	<div id='card'>
<?      	        	if ($card['list_id'] == $list['id']){ ?>
							<p class='card' id="<?= $card['status'] ?>" onclick="updateCardForm(<?= $card['id'] ?>,'<?= $card['name'] ?>','<?= $card['description'] ?>','<?= $card['status'] ?>',<?= $card['length'] ?>,<?= $card['list_id'] ?>)"><?= $card['name'] ?></p>
							<a href="database/cards/card_delete.php?id=<?= $card['id']?>"><img class='trash' src='img/pictograms/trash.svg' onclick='return confirm("are you sure")'></a>
<?						} ?>
        	    	</div>
<?      		} ?>
				</div>
        		<p class='add_card_button' onclick='createCardForm(<?= $list["id"]; ?>)'> + add card</p>
        	    <p class='edit_list_button' onclick='UpdateListForm(<?= $list["id"] ?>,"<?= $list["title"]; ?>")'>Update</p>
        	    <a class='edit_list_button' onclick="return confirm('Are you sure?')" href='database/lists/list_delete.php?id=<?= $list['id'] ?>'>Delete</a>
			</div>
<?		} ?>
        <div class='lists' onclick='createListForm()'>
            <p class='add_list_button'> + add list</p>
        </div>
    </div>
	<div id='list_overlay'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closeForms()'></button>
			<form action='database/lists/list_create.php' method='post'>
                <h3>Create List</h3>
            	<input minlength="2" maxlength="25" type='text' name='title' placeholder='title'/><br><br>
            	<input type='submit'/>
			</form>
		</div>
	</div>
	<div id='list_update_overlay'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closeForms()'></button>
			<form action='database/lists/list_update.php' method='post'>
                <h3>Update List</h3>
                <input id='list_name_update' minlength="2" maxlength="20" type='text' name='title' placeholder='title'/><br>
				<input type='hidden' name='id' id='list_id'/>
            	<input type='submit'/>
			</form>
		</div>
	</div>
    <div id='card_create_overlay'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closeForms()'></button>
			<form action='database/cards/card_create.php' method='post'>
                <h3>Create Card</h3>
                <input minlength="2" maxlength="25" type='text' name='name' placeholder='name'/><br>
                <input minlength="2" maxlength="99" type='text' name='description' placeholder = 'description' /><br>
				<input max="3600" type='number' name='length' value='' placeholder='time length (minutes)'/><br>
				<select name='status' id='status'>
					<option value='todo'>to do</option>
					<option value='doing'>doing</option>
					<option value='done'>done</option>
				</select>
				<input type='hidden' name='card_create_list_id' id='card_create_list_id'/>
            	<input type='submit'/>
			</form>
		</div>
	</div>
	<div id='card_update_overlay'>
		<div id='create_popup' class='popup'>
			<button class='close' aria-label='Close' onclick='closeForms()'></button>
			<form action='database/cards/card_update.php' method='post'>
                <h3>update Card</h3>
                <input minlength="2" maxlength="25" id='update_name_input' type='text' name='name' placeholder='name'/><br>
                <input minlength="2" maxlength="99" id='update_description_input' type='text' name='description' placeholder = 'description' /><br>
				<input id='update_length_input' type='number' name='length' placeholder='time length (minutes)'/><br>
				<select id='update_status' name='update_status'>
					<option value='todo'>to do</option>
					<option value='doing'>doing</option>
					<option value='done'>done</option>
				</select>
				<input type='hidden' name='card_id' id='card_id'/>
				<input type='hidden' name='card_list_id' id='card_list_id'/>
				<input type='submit'/>
			</form>
		</div>
	</div>
	<script src='script/script.js'></script>
</body>
</html>