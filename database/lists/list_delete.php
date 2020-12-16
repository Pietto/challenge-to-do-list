<?
include "../connect.php";

if (isset($_GET['id'])) {
    $list_stmt = $pdo->prepare('SELECT * FROM lists WHERE id = ?');
    $list_stmt->execute([$_GET['id']]);
    $lists = $list_stmt->fetch(PDO::FETCH_ASSOC);
    $list_stmt = $pdo->prepare('DELETE FROM lists WHERE id = ?');
    $list_stmt->execute([$_GET['id']]);
    $msg = 'You have deleted the list!';

    $card_stmt = $pdo->prepare('SELECT * FROM cards WHERE list_id = ?');
    $card_stmt->execute([$_GET['id']]);
    $lists = $card_stmt->fetch(PDO::FETCH_ASSOC);
    
    $card_stmt = $pdo->prepare('DELETE FROM cards WHERE list_id = ?');
    $card_stmt->execute([$_GET['id']]);
    $msg = 'You have deleted the cards!';
    
    
    header('Location: ../../index.php');
    exit;
}