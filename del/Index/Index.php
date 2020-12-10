<!DOCTYPE html>
<html>
<head>
	<title>to do list</title>
	<link rel='stylesheet' type='text/css' href='index.css'>
</head>
<body>
	<?
	include 'connect.php';

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
            <div class='cards'>
<?          foreach($cards as $card){ ?>	
            	<div id='card'>
            	    <p><?= $card['name'] ?></p>
            	</div>
<?      		} ?>
			</div>
        	<p class='add_card_button' onclick='openCardForm()'> + add card</p>
            <p class='edit_list_button' onclick='openUpdateListForm()'>Update</p>
            <a class='edit_list_button' href='../Back-End/list_delete.php?id=<?= $list['id'] ?>'>Delete</a>
		</div>
<?		} ?>
        <div class='lists' onclick='openListForm()'>
            <p class='add_list_button'> + add list</p>
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
	<div id='list_update_overlay'>
		<div id='create_popup' class='popup'>
		<form action='list_update.php' method='post'>
                <h3>Update List</h3>
                <input type='text' name='title' placeholder='<?= $lists['title'] ?>' /><br>
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
    
	<script src='script.js'></script>
</body>
</html>