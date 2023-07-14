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
    print_r($target);
    foreach($target as $data){
        $protein_command .= " AND protein_target='" . $data ."'";
    }
}

if(isset($_POST["target_list"])){
    $target = explode("_", $_POST["target_list"]);
    array_pop($target);
    $command = " AND (";
    foreach($target as $data){
        $command .= " protein_target='" . $data ."' OR";
    }
    $command = substr($command, 0, -2);
    $protein_command .= $command . " )";
}


//idと名前を取得
$sql = $pdo->prepare($protein_command);
$sql->execute();
$result = $sql->fetchAll();

$smarty->assign("dataList", $result);
$smarty->display('ProteinEnumeratePage.tpl');
?>