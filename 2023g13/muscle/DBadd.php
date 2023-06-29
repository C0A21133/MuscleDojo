<?php
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign("operation","データベースに情報を追加する。");
$smarty->assign("ope","情報を追加する。");
$smarty->assign("trainingPath","../muscle/DBtrainingAdd.php");
$smarty->assign("proteinPath","");
$smarty->display("DBselect.tpl");
?>