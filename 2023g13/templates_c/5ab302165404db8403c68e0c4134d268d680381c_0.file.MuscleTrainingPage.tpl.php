<?php
/* Smarty version 3.1.39, created on 2023-06-30 08:56:38
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\MuscleTrainingPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e7ca6aa3a15_14654698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ab302165404db8403c68e0c4134d268d680381c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\MuscleTrainingPage.tpl',
      1 => 1688107919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e7ca6aa3a15_14654698 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['trainingData']->value["training_name"];?>
 | マッスル道場</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['trainingData']->value["training_name"];?>
</h1>
    <h3>鍛えられる部位</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parts']->value, 'part');
$_smarty_tpl->tpl_vars['part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['part']->value;?>
,
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <br>
    <h3>目的</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['targets']->value, 'target');
$_smarty_tpl->tpl_vars['target']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['target']->value;?>
,
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <br>
    <h3>解説</h3>
    <?php echo $_smarty_tpl->tpl_vars['trainingData']->value["training_desc"];?>

    <br>
    <h3>注意事項</h3>
    <?php echo $_smarty_tpl->tpl_vars['trainingData']->value["training_desc"];?>

    <br>

</body><?php }
}
