<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

//idと名前を取得
$sql = $pdo->prepare("SELECT * FROM table_protein");
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