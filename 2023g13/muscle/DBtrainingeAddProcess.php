<?php
require("../libDB.php");

require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$name=$_POST["name"];
$level=$_POST["level"];
$parts=$_POST["part"];
$targets=$_POST["target"];
$desc=$_POST["desc"];
$point=$_POST["point"];

$db=new libDB();
$pdo=$db->getPDO();

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

//$smarty->display("DBtest.tpl");
?>


