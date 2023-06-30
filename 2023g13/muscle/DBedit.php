<?php
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign("operation","データベースの情報を変更・削除する。");
$smarty->assign("ope","情報を変更・削除する。");
$smarty->assign("trainingPath","../muscle/DBtrainingEditList.php");
$smarty->assign("proteinPath","");
$smarty->display("DBselect.tpl");
?>