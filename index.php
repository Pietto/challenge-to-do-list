<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel='stylesheet' type='text/css' href='styles/index.css'>
</head>
<body>
<?
	session_start();
	include 'database/connect.php';
	include 'database/content.php';
?>


	<div id='listsparent'>
<?      foreach($lists as $list){ ?>
        	<div class='lists'>
				<h3><?= $list['title']?></h3>

				<form action='<?= $_SERVER['PHP_SELF'] ?>?listID=<?= $list['id']?>' method='post'>
					<select name='filterStatus' onchange='this.form.submit()'>
						<option value='' hidden>filter</option>
						<option value='default'>geen filter</option>
						<option value='todo'>to do</option>
						<option value='doing'>doing</option>
						<option value='done'>done</option>
					</select>
					<input type='hidden' value='true' name='value'/>
				</form>

        	    <div class='cards'>
<?				echo $list['id'];
				$cards = getCardsForListID($list['id']);			?>
<?      	    foreach($cards as $card){ ?>
        	    	<div id='card_<?= $card['status'] ?>'>
<?      	        	if ($card['list_id'] == $list['id']){ ?>
							<!-- if(filter == false of kaart.status == waarde) -->
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
				<input min="1" max="3600" type='number' name='length' value='1' placeholder='time length (minutes)'/><br>
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
				<input min="1" max="3600" id='update_length_input' type='number' name='length' placeholder='time length (minutes)'/><br>
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