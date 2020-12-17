<?

$status = $_POST['filterStatus'];
$value = $_POST['value'];
if(!empty($_POST['filterStatus']) && !empty($_GET['listID'])){
    $_SESSION['filterStatus'][$_GET['listID']] = $_POST['filterStatus'];
}


$lists_qry = 'SELECT * FROM lists';
$lists_stmt = $pdo->prepare($lists_qry);
$lists_stmt->execute();
$lists = $lists_stmt->fetchAll();




function getCardsForListID($listID){
    if(array_key_exists($listID, $_SESSION['filterStatus']) && $_SESSION['filterStatus'][$listID] != '' && $_SESSION['filterStatus'][$listID] != 'default'){
        $filter = ' AND status = "' . $_SESSION['filterStatus'][$listID] .'"';
    }else{
        $filter = '';
    }

    $pdo = new PDO('mysql:host=localhost;dbname=backend', 'root', 'mysql');
    $cards_qry = 'SELECT * FROM cards WHERE list_id =' . $listID . $filter;
    $cards_stmt = $pdo->prepare($cards_qry);
    $cards_stmt->execute();
    return $cards_stmt->fetchAll();
}







// if($value == false){


// }else if($value == true){
//     $pdo = new PDO('mysql:host=localhost;dbname=backend', 'root', 'mysql');


//     $cards_qry = 'SELECT * FROM cards WHERE status = '.$status;
//     echo $cards_qry;

//     $cards_stmt = $pdo->prepare($cards_qry);
//     $cards_stmt->execute();	
//     $cards = $cards_stmt->fetchAll();

//     // header('Location: ../index.php');
// }