<?php
/* Smarty version 3.1.39, created on 2023-06-26 02:47:41
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\DBtrainingAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6498e02d55a7f8_40380614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b2f6d93970099b0bdaba8745415de5ae431ca71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\DBtrainingAdd.tpl',
      1 => 1687739497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6498e02d55a7f8_40380614 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング情報を追加する。</title>
    </head>
    <body>
        <h1>トレーニング情報を追加する。</h1>
        <form action="../muscle/DBtrainingeAddProcess.php" method="post">

        トレーニング名
        ：<input type="text" name="name" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>
        <font color="#ff0000">*必須</font><br>

        部位：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="part[]" value="肩">肩
        <input type="checkbox" name="part[]" value="腕">腕
        <input type="checkbox" name="part[]" value="胸">胸
        <input type="checkbox" name="part[]" value="体幹">体幹
        <input type="checkbox" name="part[]" value="背中">背中
        <input type="checkbox" name="part[]" value="脚">脚<br>

        目的：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>

        解説：<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30" required></textarea><br>

        注意事項：<br>
        <textarea name="point" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">

        </form>
    </body>
</html><?php }
}
