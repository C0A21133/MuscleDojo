<?php
/* Smarty version 3.1.39, created on 2023-06-26 09:06:25
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\DBtrainingEditList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649938f1bd1302_67156042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ec70fb5ab94128384f2ffad97ec277b5b78b6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\DBtrainingEditList.tpl',
      1 => 1687763175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649938f1bd1302_67156042 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニングの情報を変更・削除する。</title>
    </head>
    <body>
        <h1>トレーニングの情報を変更・削除する。</h1>
        <h2>トレーニング一覧</h2>
        <ul>
            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataList']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                <li><h3><a href="../muscle/DBtrainingEdit.php/?id=<?php echo $_smarty_tpl->tpl_vars['data']->value["training_id"];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value["training_name"];?>
</a></h3></li>    
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

        </ul>
    </body>
</html><?php }
}
