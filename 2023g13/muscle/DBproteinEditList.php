<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

//smartyを有効化
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

//idと名前を取得
$sql = $pdo->prepare("SELECT * FROM table_protein");
$sql->execute();
$result = $sql->fetchAll();

//表示
$smarty->assign("dataList",$result);
$smarty->assign("beforePath","../muscle/DBedit.php");
$smarty->display("DBproteinEditList.tpl");
?>