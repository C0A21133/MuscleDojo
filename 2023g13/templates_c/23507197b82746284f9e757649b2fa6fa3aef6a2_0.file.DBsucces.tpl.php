<?php
/* Smarty version 3.1.39, created on 2023-06-30 07:43:23
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\DBsucces.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e6b7be703e1_52865991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23507197b82746284f9e757649b2fa6fa3aef6a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\DBsucces.tpl',
      1 => 1688013560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e6b7be703e1_52865991 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['contents']->value;?>
に成功しました</title>
        <!--成功ページ contents:目的 path:1つ前のページのパス-->
    </head>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['contents']->value;?>
に成功しました</h1>
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">戻る</a></h3>
        <h3><a href="../muscle/DBadmin.php">トップページへ戻る</a></h3>
    </body>
</html><?php }
}
