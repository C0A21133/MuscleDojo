<?php
require("../libDB.php");

//smartyを有効化
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//POSTされたデータを変数へ
$id=(int)$_POST["id"];
$name=$_POST["name"];
$level=(int)$_POST["level"];
$parts=$_POST["part"];
$targets=$_POST["target"];
$desc=nl2br($_POST["desc"]);
$point=nl2br($_POST["point"]);
$btn=$_POST["btn"];

//データベースへ接続
$db=new libDB();
$pdo=$db->getPDO();

if($btn=="更新"){

//table_trainingへ追加
$sql=$pdo->prepare("UPDATE table_training SET training_name=:name, training_level=:level, training_desc=:desc, training_point=:point WHERE training_id=:id");
$sql->bindValue(":name",$name,PDO::PARAM_STR);
$sql->bindValue(":level",$level,PDO::PARAM_INT);
$sql->bindValue(":desc",$desc,PDO::PARAM_STR);
$sql->bindValue(":point",$point,PDO::PARAM_STR);
$sql->bindValue(":id", $id, PDO::PARAM_INT);
$sql->execute();

//現在part情報を削除
$sql=$pdo->prepare("DELETE from table_part WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();

//table_partへ追加
foreach($parts as $part){
    $sql=$pdo->prepare("INSERT INTO table_part (training_id,part) VALUES (:id,:part)");
    $sql->bindValue(":id",$id,PDO::PARAM_INT);
    $sql->bindValue(":part",$part,PDO::PARAM_STR);
    $sql->execute();
}

//現在のtarget情報を削除
$sql=$pdo->prepare("DELETE from table_target WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();

//table_targetへ追加
foreach($targets as $target){
    $sql=$pdo->prepare("INSERT INTO table_target (training_id,target) VALUES (:id,:target)");
    $sql->bindValue(":id",$id,PDO::PARAM_INT);
    $sql->bindValue(":target",$target,PDO::PARAM_STR);
    $sql->execute();
}

$smarty->assign("contents","データの変更");
$smarty->assign("path","../muscle/DBtrainingEdit.php/?id=".$id);
$smarty->display("../templates/DBsucces.tpl");

}
elseif($btn=="削除"){

//現在のpart情報を削除
$sql=$pdo->prepare("DELETE from table_part WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();

//現在のtarget情報を削除
$sql=$pdo->prepare("DELETE from table_target WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();

//現在のtraining情報を削除
$sql=$pdo->prepare("DELETE from table_training WHERE training_id=:id");
$sql->bindValue(":id",$id,PDO::PARAM_INT);
$sql->execute();

$smarty->assign("contents","データの削除");
$smarty->assign("path","../muscle/DBtrainingEditList.php");
$smarty->display("../templates/DBsucces.tpl");
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


?>


