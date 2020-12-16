<?
include "../connect.php";
// initialize variables for the insert query
if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE lists SET `id` = :id, `title` = :title WHERE id = :id');
        $stmt->execute([':id'=>$id, ':title'=>$title]);
        $msg = 'Updated Successfully!';
    }
    header('Location: ../../index.php');
} else{
    exit('No ID specified!');
    }