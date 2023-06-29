<?php
/* Smarty version 3.1.39, created on 2023-06-26 03:05:52
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\DBselect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6498e4709eb8f5_93527213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85c2b55ac1707e22d7e80befe511250f706aada2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\DBselect.tpl',
      1 => 1687741509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6498e4709eb8f5_93527213 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['operation']->value;?>
</title>
    </head>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['operation']->value;?>
</h1>
        <ul>
            <a href="<?php echo $_smarty_tpl->tpl_vars['trainingPath']->value;?>
"><h3><li>トレーニングの<?php echo $_smarty_tpl->tpl_vars['ope']->value;?>
</li></h3></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['proteinPath']->value;?>
"><h3><li>プロテインの<?php echo $_smarty_tpl->tpl_vars['ope']->value;?>
</li></h3></a>
        </ul>
    </body>
</html><?php }
}
