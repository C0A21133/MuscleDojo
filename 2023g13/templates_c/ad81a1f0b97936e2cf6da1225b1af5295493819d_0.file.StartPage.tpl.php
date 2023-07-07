<?php
/* Smarty version 3.1.39, created on 2023-07-07 09:31:10
  from 'C:\xampp\htdocs\pnw\MuscleDojo\2023g13\templates\StartPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7bf3eb67092_17232030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad81a1f0b97936e2cf6da1225b1af5295493819d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\MuscleDojo\\2023g13\\templates\\StartPage.tpl',
      1 => 1688715069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7bf3eb67092_17232030 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../cssFolder/StartPage.css">
    <meta charset="utf-8">
    </head>
    <div class="header-box"></div>
    <header>
        <h1 class = "logo">まっする</h1>
        <nav class="pc-menu">
            <ul>
                
            </ul>
        </nav>
    </header>
    
    <body onload='Draw()'>
    <div class="BGImage">
        <div class="canvas-wrap-front" id="canvasdiv">@
            <canvas  id="frontCanvas" width="282" height="400" class="canvas"></canvas>
            <!-- スクリプトで描写するほうが記述量が少ないが、描写処理はまとめて記述したいのでHTMLで記述した -->

            <!-- 画像を増やす場合、idの先頭の数字を一つづつ増やした<canvas>をコピペで記述
                startPage.js の frontMuscleArray配列に パスを追記。
                clickOnCanvas()とmoveOnCanvas()に行いたい処理を記述すること
                idはStartPage.jsのfrontMuscleArrayの要素のインデックス番号+frontCanvas
            -->
            <canvas  id="0frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="1frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="2frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="3frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="4frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="5frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="6frontCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="7frontCanvas" width="282" height="400" class="canvas"></canvas>
            <!-- 判定用のキャンバス -->
            <canvas  id="frontJudgeCanvas" width="282" height="400" class="canvas"></canvas>
        </div>
        <div class="canvas-wrap-back">
            <canvas  id="backCanvas" width="282" height="400" class="canvas"></canvas>

            <canvas  id="0backCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas  id="1backCanvas" width="282" height="400" class="canvas"></canvas>
            <canvas id="2backCanvas" width="282" height="400" class="canvas"></canvas>

            <canvas  id="backJudgeCanvas" width="282" height="400" class="canvas"></canvas>
        </div>
          <form class="front purpose" action="../muscle/MuscleEnumerate.php" method="post">
              <p style="margin-left: 1500px; margin-top:100px;">
                  <font size="8">難易度</font><br>
              </p>
                <ul style="margin-left: 1200px; margin-top:100px;">
                  <input type="checkbox" name="training" value="level1">
                  <li><font size="5">level1</font></li>
                  <input type="checkbox" name="training" value="level2">
                  <li>level2</li>
                  <input type="checkbox" name="training" value="level3">
                  <li>level3</li>
                  <input type="checkbox" name="training" value="level2">
                  <li>level4</li>
                  <input type="checkbox" name="training" value="level3">
                  <li>level5</li>
                  <input type="checkbox" name="training" value="level2">
                  <li>level6</li>
                  <input type="checkbox" name="training" value="level3">
                  <li>level7</li>
                  <input type="checkbox" name="training" value="level2">
                  <li>level8</li>
                  <input type="checkbox" name="training" value="level3">
                  <li>level9</li>
              </ul>
          </form>
          <form class="front level " action="../muscle/MuscleEnumerate.php" method="post">
              <p>目的<br>
              <p>目的1<br>
                  <input type="checkbox" name="training" value="バルクアップをしたい">バルクアップをしたい
              </p>
              <p>目的2<br>
                  <input type="checkbox" name="training" value="細マッチョを目指す">細マッチョを目指す
              </p>
              <p>目的3<br>
                  <input type="checkbox" name="training" value="ダイエットをしたい">ダイエットをしたい
              </p>
</form>
    </div>

    <?php echo '<script'; ?>
 src="../Script/StartPage.js"><?php echo '</script'; ?>
>
</body>
    
</html>
<?php }
}
