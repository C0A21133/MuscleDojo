<?php

require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->display('StartPage.tpl');

$images = glob('../Resources/Images/FrontMusclePart/*.png');
echo '<div class="box">';
echo '<img src="../Resources/Images/Back.png" class="img_body">';
foreach($images as $v) {
    echo '<img src="' , $v , '" alt="" loading="lazy" class="img_part">';
}
echo '</div>'
?>