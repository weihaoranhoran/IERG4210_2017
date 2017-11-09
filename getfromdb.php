<?php
include_once('db.inc.php');
global $db;
$db = ierg4210_DB();



$the_id=intval($_GET['q']);
$prod_list = $db->prepare("SELECT * FROM products WHERE pid=$the_id");
$prod_list->execute();
while ($result = $prod_list->fetch(PDO::FETCH_ASSOC))
{
    if($result['pid']==$the_id)
    {
        $myObj[$result['name']]=$result['price'];
        $myObj[$_GET['q']]=$_GET['qnt'];
        echo json_encode($myObj);
        break;
    }
}
?>