<?php
require_once("../pnwsmarty.php");
require("../libDB.php");

$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();


//データベースへ接続
$db = new libDB();
$pdo = $db->getPDO();

$search_command = "SELECT * FROM table_training 
    INNER JOIN table_part ON table_training.training_id = table_part.training_id 
    INNER JOIN table_target ON table_training.training_id = table_target.training_id 
    INNER JOIN table_protein ON table_target.target = table_protein.protein_target 
    WHERE  1=1 ";

//["id", "name", "level", ["part"], ["target"]]
$result_list = [];
//検索した結果のtraining_idを重複なしで保持
$id_list = [];

//検索するためのsql文作成
if(isset($_POST["tr_level"]) && $_POST["tr_level"] != -1){
    $level = (int)$_POST["tr_level"];
    $search_command .= " AND training_level=" . $level;
}

if(isset($_POST["tr_name"]) && $_POST["tr_name"] != ""){
    $name = (string)$_POST["tr_name"];
    $search_command .= " AND training_name='" . $name ."'";
}

if(isset($_POST["part"])){
    $part = $_POST["part"];
    $command = " AND ( ";
    foreach($part as $data){
        $command .= "  part='" . $data ."' OR";
    }
    $command = substr($command, 0, -2);
    $search_command .= $command . " )";
}
if(isset($_POST["target"])){
    $target = $_POST["target"];
    $command = " AND ( ";
    foreach($target as $data){
        $command .= "  target='" . $data ."' OR";
    }
    $command = substr($command, 0, -2);
    $search_command .= $command . ")";
}

//idと名前を取得
$search_sql = $pdo->prepare($search_command);
$search_sql->execute();
$search_result = $search_sql->fetchAll();

//重複なしの検索結果
foreach($search_result as $data){
    $id_list[] =  $data["training_id"];
}
$id_list = array_unique($id_list);

//training_id を持つデータresult_listにまとめる
foreach($id_list as $num){
    $part_command = "SELECT part FROM table_part WHERE ";
    $target_command = "SELECT target FROM table_target WHERE ";
    $training_command = "SELECT * FROM  table_training WHERE ";

    $target_list = [];
    $part_list = [];

    $target_command .= "training_id=" . $num;
    $part_command .= "training_id=" . $num;
    $training_command .= "training_id=" . $num;

    $part_sql = $pdo->prepare($part_command);
    $part_sql->execute();
    $part_result = $part_sql->fetchAll();
    foreach($part_result as $data){
        $part_list[] =  $data["part"];
    }

    $target_sql = $pdo->prepare($target_command);
    $target_sql->execute();
    $target_result = $target_sql->fetchAll();
    foreach($target_result as $data){
        $target_list[] =  $data["target"];
    }

    $training_sql = $pdo->prepare($training_command);
    $training_sql->execute();
    $training_result = $training_sql->fetchAll();

    $result_list[] = [$num ,$training_result[0]["training_name"], $training_result[0]["training_level"], $part_list,$target_list];
}


$smarty->assign("idList", $id_list);
$smarty->assign("resultList", $result_list);

$smarty->assign("datalist", $search_result);
$smarty->display('MuscleEnumeratePage.tpl');

//foreach($training_result as $data){
//    echo "<a href='MuscleTrainingPage.php/?id=".$data["training_id"]."'>".$data["training_name"]."</a>"."<br>";
//}
?>