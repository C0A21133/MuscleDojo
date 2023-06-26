<?php

require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$images = glob('../Resources/Images/FrontMusclePart/*.png');
$images_json = json_encode($images);


$smarty->display('StartPage.tpl');
?>