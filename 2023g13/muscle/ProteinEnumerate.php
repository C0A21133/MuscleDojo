<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

$protein_command = "SELECT * FROM table_protein WHERE 1=1";



if(isset($_POST["maker"]) && $_POST["maker"]!=""){
    $maker = (string)$_POST["maker"];
    $protein_command .= " AND protein_maker='" . $maker ."'";
}
if(isset($_POST["name"]) && $_POST["name"]!=""){
    $name = (string)$_POST["name"];
    $protein_command .= " AND protein_name='" . $name ."'";
}
if(isset($_POST["price"]) && $_POST["price"]!=""){
    $price = (int)$_POST["price"];
    $protein_command .= " AND protein_price=" . $price;
}
if(isset($_POST["weight"])&& $_POST["weight"]!=""){
    $weight = (int)$_POST["weight"];
    $protein_command .= " AND protein_wight=" . $weight;
}
if(isset($_POST["target"])){
    $target = $_POST["target"];
    foreach($target as $data){
        $protein_command .= " AND protein_target='" . $data ."'";
    }
}

//idと名前を取得
$sql = $pdo->prepare($protein_command);
$sql->execute();
$result = $sql->fetchAll();

$column = 'SHOW COLUMNS FROM table_protein';
$stmh = $pdo->prepare($column);
$stmh -> execute();
while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
$rows[]=$row;
}

$smarty->assign("dataList", $result);
$smarty->assign("Column", $rows);
$smarty->display('ProteinEnumeratePage.tpl');
?>