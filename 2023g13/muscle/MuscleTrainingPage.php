<?php
require("../libDB.php");
require_once("../pnwsmarty.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$db = new libDB();
$pdo = $db->getPDO();

$id = $_GET["id"];

$sql = $pdo->prepare("SELECT * FROM table_training WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();
$result = $sql-> fetchAll();

foreach($result as $data){
    $trainingData = $data;
}

$sql = $pdo->prepare("SELECT * FROM table_part WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();
$result = $sql-> fetchAll();
$parts = array();
foreach($result as $part){
    array_push($parts,$part["part"]);
}

$sql = $pdo->prepare("SELECT * FROM table_target WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();
$result = $sql-> fetchAll();
$targets = array();
foreach($result as $target){
    array_push($targets,$target["target"]);
}

$smarty->assign("id",$id);
$smarty->assign("trainingData",$trainingData);
$smarty->assign("parts",$parts);
$smarty->assign("targets",$targets);
$smarty->display("../templates/MuscleTrainingPage.tpl");

?>