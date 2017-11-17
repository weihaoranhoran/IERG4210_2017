<?php
include_once('db.inc.php');
global $db;
$db = ierg4210_DB();



$the_id=intval($_GET['q']);


$prod_list = $db->prepare("SELECT pid, name, price FROM products WHERE pid=?;");
$prod_list->execute(array($the_id));
foreach($prod_list as $row)
{
        $myObj[$row['name']]=$row['price'];
        $myObj[$_GET['q']]=$_GET['qnt'];
        echo json_encode($myObj);
}
?>