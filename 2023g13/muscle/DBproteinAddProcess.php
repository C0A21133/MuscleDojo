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

//table_proteinへ追加
$sql=$pdo->prepare("INSERT INTO table_protein (protein_maker,protein_name,protein_weight,protein_price,protein_target,protein_desc) VALUES (:maker,:name,:weight,:price,:target,:desc)");
$sql->bindValue(":maker",$maker,PDO::PARAM_STR);
$sql->bindValue(":name",$name,PDO::PARAM_INT);
$sql->bindValue(":weight",$weight,PDO::PARAM_STR);
$sql->bindValue(":price",$price,PDO::PARAM_STR);
$spl->bindValue(":target",$target,PDO::PARAM_STR);
$spl->bindValue(":desc",$desc,PDO::PARAM_STR);
$sql->execute();

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
$smarty->assign("path","../muscle/DBproteinAdd.php");
$smarty->display("../templates/DBsucces.tpl");
?>


