<?php
require("../libDB.php");

//smartyを有効化
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//POSTされたデータを変数へ
$name=$_POST["name"];
$level=(int)$_POST["level"];
$parts=$_POST["part"];
$targets=$_POST["target"];
$desc=nl2br($_POST["desc"]);
$point=nl2br($_POST["point"]);

//データベースへ接続
$db=new libDB();
$pdo=$db->getPDO();

//table_trainingへ追加
$sql=$pdo->prepare("INSERT INTO table_training (training_name,training_level,training_desc,training_point) VALUES (:name,:level,:desc,:point)");
$sql->bindValue(":name",$name,PDO::PARAM_STR);
$sql->bindValue(":level",$level,PDO::PARAM_INT);
$sql->bindValue(":desc",$desc,PDO::PARAM_STR);
$sql->bindValue(":point",$point,PDO::PARAM_STR);
$sql->execute();

//training_idの取得
$sql=$pdo->prepare("SELECT training_id FROM table_training WHERE training_name=:name AND training_level=:level AND training_desc=:desc AND training_point=:point");
$sql->bindValue(":name",$name,PDO::PARAM_STR);
$sql->bindValue(":level",$level,PDO::PARAM_INT);
$sql->bindValue(":desc",$desc,PDO::PARAM_STR);
$sql->bindValue(":point",$point,PDO::PARAM_STR);
$sql->execute();
$result=$sql->fetchAll();
foreach($result as $loop){
    $id=(int)$loop["training_id"];
}

//table_partへ追加
foreach($parts as $part){
    $sql=$pdo->prepare("INSERT INTO table_part (training_id,part) VALUES (:id,:part)");
    $sql->bindValue(":id",$id,PDO::PARAM_INT);
    $sql->bindValue(":part",$part,PDO::PARAM_STR);
    $sql->execute();
}

//table_targetへ追加
foreach($targets as $target){
    $sql=$pdo->prepare("INSERT INTO table_target (training_id,target) VALUES (:id,:target)");
    $sql->bindValue(":id",$id,PDO::PARAM_INT);
    $sql->bindValue(":target",$target,PDO::PARAM_STR);
    $sql->execute();
}

//変数確認用
/*
echo $id."<br>";
echo $name;
echo $level;
foreach($parts as $part){
    echo $part;
}
foreach($targets as $target){
    echo $target;
}
echo $desc;
echo $point;
*/

$smarty->assign("contents","データの追加");
$smarty->assign("path","../muscle/DBtrainingAdd.php");
$smarty->display("../templates/DBsucces.tpl");
?>


