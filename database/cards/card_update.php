<?
include "../connect.php";
// initialize variables for the insert query
if (isset($_POST['card_id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['card_id']) ? $_POST['card_id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $length = isset($_POST['length']) ? $_POST['length'] : '';
        $status = isset($_POST['update_status']) ? $_POST['update_status'] : '';
        $list_id = isset($_POST['card_list_id']) ? $_POST['card_list_id'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE cards SET `id` = :id, `name` = :name, `description` = :description, `length` = :length, `status` = :status, `list_id` = :list_id WHERE id = :id');
        $stmt->execute([':id'=>$id, ':name'=>$name, ':description'=>$description, ':length'=>$length, ':status'=>$status, ':list_id'=>$list_id]);
        $msg = 'Updated Successfully!';
    }
    // header('Location: ../../index.php');
} else{
    exit('No ID specified!');
}