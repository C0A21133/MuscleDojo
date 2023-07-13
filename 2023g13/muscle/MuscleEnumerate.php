<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();


//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

$training_command = "SELECT * FROM table_training 
    INNER JOIN table_part ON table_training.training_id = table_part.training_id 
    INNER JOIN table_target ON table_training.training_id = table_target.training_id 
    INNER JOIN table_protein ON table_target.target = table_protein.protein_target 
    WHERE ";


if(isset($_POST["tr_level"])){
    $level = (int)$_POST["tr_level"];
    $training_command .= "training_level=" . $level;
}

if(isset($_POST["tr_name"]) && $_POST["tr_name"] != ""){
    $name = (string)$_POST["tr_name"];
    $training_command .= " AND training_name='" . $name ."'";
}


if(isset($_POST["part"])){
    $part = $_POST["part"];
    $command = " AND ( ";
    foreach($part as $data){
        $command .= "  part='" . $data ."' OR";
    }
    $command = substr($command, 0, -2);
    $training_command .= $command . " )";
}
if(isset($_POST["target"])){
    $target = $_POST["target"];
    $command = " AND ( ";
    foreach($target as $data){
        $command .= "  target='" . $data ."' OR";
    }
    $command = substr($command, 0, -2);
    $training_command .= $command . ")";
}


//idと名前を取得
$training_sql = $pdo->prepare($training_command);
$training_sql->execute();
$training_result = $training_sql->fetchAll();



$column = 'SHOW COLUMNS FROM table_training';
$stmh = $pdo->prepare($column);
$stmh -> execute();
while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
    $rows[]=$row;
}


$smarty->assign("Column", $rows);
$smarty->assign("datalist", $training_result);
$smarty->display('MuscleEnumeratePage.tpl');

foreach($training_result as $data){
    echo "<a href='MuscleTrainingPage.php/?id=".$data["training_id"]."'>".$data["training_name"]."</a>"."<br>";
}
?>