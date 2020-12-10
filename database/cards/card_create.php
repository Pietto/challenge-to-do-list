<?
include "../connect.php";
// Check if POST data is not empty
if (!empty($_POST)) {
    // collect id and title
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $length = isset($_POST['length']) ? $_POST['length'] : '';
	$status = isset($_POST['status']) ? $_POST['status'] : '';
	$list_id = isset($_POST['card_list_id']) ? $_POST['card_list_id'] : '';
    // insert query
    $stmt = $pdo->prepare("INSERT INTO cards (id, name, description, length, status, list_id) VALUES (:id, :name, :description, :length, :status, :list_id)");
    $stmt->execute(['id'=>$id, 'name'=>$name,'description'=>$description, 'length'=>$length, 'status'=>$status, 'list_id'=>$list_id]);
    header('Location: ../../index.php');
}