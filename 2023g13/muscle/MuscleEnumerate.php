<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();
/*
//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

$level = (int)$_POST["level"];

//idと名前を取得
$sql = $pdo->prepare("SELECT * FROM table_training WHERE training_level=:level");
$sql->bindValue(":level",$level,PDO::PARAM_INT);
$sql->execute();
$result = $sql->fetchAll();

$result = "sss";

$smarty->assign("datalist", $result);
$smarty->display('MuscleEnumeratePage.tpl');
*/
foreach($result as $data){
    echo "<a href='MuscleTrainingPage/?id=".$data["training_id"]."'>".$data["training_name"]."</a>"."<br>";
}
?>