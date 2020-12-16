<?
include "../connect.php";
// Check that the list card_id exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM cards WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $cards = $stmt->fetch(PDO::FETCH_ASSOC);
    // Delete the record
    $stmt = $pdo->prepare('DELETE FROM cards WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $msg = 'You have deleted the card!';
    header('Location: ../../index.php');
    exit;
} else {
    exit('No id specified!');
}
?>
