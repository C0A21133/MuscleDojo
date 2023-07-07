<?php
/* Smarty version 3.1.39, created on 2023-07-07 09:25:33
  from 'C:\xampp\htdocs\pnw\MuscleDojo\2023g13\templates\MuscleEnumeratePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7bded9f3aa3_67485218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '197d62765f4f8494d3bbdb86f1e32c8fb55dd858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\MuscleDojo\\2023g13\\templates\\MuscleEnumeratePage.tpl',
      1 => 1688714729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7bded9f3aa3_67485218 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/StartPage.css">
    </head>
    <div class="header-box"></div>
    <header>
        <h1 class = "logo">まっする</h1>
        <nav class="pc-menu">
            <ul>
                
            </ul>
        </nav>
    </header>
    <div class="BGImage">
    <body>
    <table align="center" border="1" class="front enumerateTable">
    <tr>
        <th>id</th>
        <th>level</th>
        <th>name</th>
        <th>setumi</th>
        <th>point</th>
    </tr>
        <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataList']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            <tr>
            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Column']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['column']->value['Field'];
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['data']->value[$_prefixVariable3];?>
</td>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

            </tr>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

    </table>
    </body>
    </div>
</html><?php }
}
