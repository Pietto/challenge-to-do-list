<?
include "../connect.php";
// Check if POST data is not empty
if (!empty($_POST)) {
    // collect id and name
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    
    // insert query
    $stmt = $pdo->prepare("INSERT INTO lists (id, name) VALUES (:id, :name)");
    $stmt->execute(['id'=>$id, 'name'=>$name]);
    header('Location: index.php');
}