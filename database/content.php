<?


$_SESSION[''];

// creating a session for the data
if(!empty($_POST['filterStatus']) && !empty($_GET['listID'])){
    $_SESSION['filterStatus'][$_GET['listID']] = $_POST['filterStatus'];
}
if(!empty($_POST['sortLength']) && !empty($_GET['listID'])){
    $_SESSION['sortLength'][$_GET['listID']] = $_POST['sortLength'];
}

// fetching lists
$lists_qry = 'SELECT * FROM lists';
$lists_stmt = $pdo->prepare($lists_qry);
$lists_stmt->execute();
$lists = $lists_stmt->fetchAll();

// filter/sort + giving correct qry
function getCardsForListID($listID){
    if(array_key_exists($listID, $_SESSION['filterStatus']) && $_SESSION['filterStatus'][$listID] != '' && $_SESSION['filterStatus'][$listID] != 'default'){
        if(array_key_exists($listID, $_SESSION['sortLength']) && $_SESSION['sortLength'][$listID] != '' && $_SESSION['sortLength'][$listID] != 'no'){
            $filter = ' AND status = "' . $_SESSION['filterStatus'][$listID] .'" ORDER BY length  ' . $_SESSION['sortLength'][$listID];
        }else{
            $filter = ' AND status = "' . $_SESSION['filterStatus'][$listID] .'"';
        }
    }else{
        $filter = '';
        if(array_key_exists($listID, $_SESSION['sortLength']) && $_SESSION['sortLength'][$listID] != '' && $_SESSION['sortLength'][$listID] != 'no'){
            $filter = ' ORDER BY length ' . $_SESSION['sortLength'][$listID];
        }else{
            $filter = '';
        }
    }

    // fetching cards
    $pdo = new PDO('mysql:host=localhost;dbname=backend', 'root', 'mysql');
    $cards_qry = 'SELECT * FROM cards WHERE list_id =' . $listID . $filter;
    $cards_stmt = $pdo->prepare($cards_qry);
    $cards_stmt->execute();
    return $cards_stmt->fetchAll();
}