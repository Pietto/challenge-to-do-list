<?
include "../connect.php";
    // Check that the list ID exists
    if (isset($_GET['id'])) {
        // Select the record that is going to be deleted
        $stmt = $pdo->prepare('SELECT * FROM lists WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $lists = $stmt->fetch(PDO::FETCH_ASSOC);
        // Delete the record
        $stmt = $pdo->prepare('DELETE FROM lists WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $msg = 'You have deleted the list!';
        header('Location: ../../index.php');
        exit;
    } else {
        exit('No ID specified!');
    }
?>