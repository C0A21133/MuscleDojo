<?php
/* Smarty version 3.1.39, created on 2023-06-30 10:54:15
  from 'C:\xampp\htdocs\pnw\MuscleDojo\2023g13\templates\DBproteinAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e983731fa53_57183193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7aa8f8f8bca5e11f568276d5229220e25868eeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\MuscleDojo\\2023g13\\templates\\DBproteinAdd.tpl',
      1 => 1688113954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e983731fa53_57183193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>プロテイン情報を追加する。</title>
        <!--プロテイン情報追加ページ-->
    </head>
    <body>
        <h1>プロテインを追加する</h1>
        <from action="../muscle/DBproteinAddProcess" method="post">

        メーカー
        :<input type="text" name="maker" required>
        <font color="ff0000">*必須</font><br>
        プロテイン名
        :<input type="text" name="name" required>
        <font color="ff0000">*必須</font><br>
        値段
        :<input type="int" name="price" required>
        <font color="ff0000">*必須</font><br>
        グラム数
        :<input type="int" name="weight" required>
        <font color="ff0000">*必須</font><br>
        目的
        :<font color="#ff0000">*必須</font><br>
        <input type="radio" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="radio" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="radio" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>
        説明
        :<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">

    </body>
</html>
<?php }
}
