<?php
require_once("../pnwsmarty.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();
/*
//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

//idと名前を取得
$sql = $pdo->prepare("SELECT * FROM table_protein");
$sql->execute();
$result = $sql->fetchAll();
*/

$result = "sss";

$smarty->assign("datalist", $result);
$smarty->display('ProteinEnumeratePage.tpl');
?>