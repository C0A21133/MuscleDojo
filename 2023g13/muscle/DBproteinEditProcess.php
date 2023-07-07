<?php
require("../libDB.php");

//smartyを有効化
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

//POSTされたデータを変数へ
$id=(int)$_POST["id"];
$maker=$_POST["maker"];
$name=$_POST["name"];
$price=(int)$_POST["price"];
$weight=(int)$_POST["weight"];
$target=$_POST["target"];
$desc=nl2br($_POST["desc"]);
$btn=$_POST["btn"];

//データベースへ接続
$db=new libDB();
$pdo=$db->getPDO();

switch($btn){

    case "削除":
        $sql=$pdo->prepare("DELETE from table_protein WHERE protein_id=:id");
        $sql->bindValue(":id",$id,PDO::PARAM_INT);
        $sql->execute();

        $smarty->assign("contents","データの削除");
        $smarty->assign("path","../muscle/DBproteinEditList.php");
        $smarty->display("../templates/DBsucces.tpl");
        break;

    case "更新":
        $sql=$pdo->prepare("UPDATE table_protein SET protein_name=:name, protein_maker=:maker, protein_price=:price, protein_weight=:weight, protein_target=:target, protein_desc=:desc WHERE protein_id=:id");
        $sql->bindValue(":name",$name,PDO::PARAM_STR);
        $sql->bindValue(":maker",$maker,PDO::PARAM_STR);
        $sql->bindValue(":price",$price,PDO::PARAM_INT);
        $sql->bindValue(":weight",$weight,PDO::PARAM_INT);
        $sql->bindValue(":target",$target,PDO::PARAM_STR);
        $sql->bindValue(":desc",$desc,PDO::PARAM_STR);
        $sql->bindValue(":id", $id, PDO::PARAM_INT);
        $sql->execute();

        $smarty->assign("contents","データの更新");
        $smarty->assign("path","../muscle/DBproteinEdit.php/?id=".$id);
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


