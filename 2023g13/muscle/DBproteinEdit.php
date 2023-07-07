<?php
require("../libDB.php");
require_once("../pnwsmarty.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$db = new libDB();
$pdo = $db->getPDO();

$id = $_GET["id"];

$sql = $pdo->prepare("SELECT * FROM table_protein WHERE protein_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();
$result = $sql-> fetchAll();

foreach($result as $data){
    $proteinData = $data;
}

$smarty->assign("proteinData",$proteinData);
$smarty->display("../templates/DBproteinEdit.tpl");
?>