<?
include "../connect.php";
// Check if POST data is not empty
if (!empty($_POST)) {
    // collect id and title
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    
    // insert query
    $stmt = $pdo->prepare("INSERT INTO lists (id, title) VALUES (:id, :title)");
    $stmt->execute(['id'=>$id, 'title'=>$title]);
    header('Location: ../../index.php');
}