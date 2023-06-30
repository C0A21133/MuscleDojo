<?php
/* Smarty version 3.1.39, created on 2023-06-30 09:09:22
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\MuscleTrainingList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e7fa2c44fd6_34367528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5095f00ce2022d6d4d9656463cb28c27aaccded2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\MuscleTrainingList.tpl',
      1 => 1688108942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e7fa2c44fd6_34367528 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング一覧 | マッスル道場</title>
        <!--編集できる情報一覧ページ-->
    </head>
    <body>
        <h1>トレーニング一覧</h1>
        <ul>
            <!--phpから送られてきたデータの配列からtraining_idをpathのクエリパラメータに、画面には、training_nameを表示する-->
            <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataList']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                <li><h3><a href="<?php echo $_smarty_tpl->tpl_vars['beforePath']->value;?>
/?id=<?php echo $_smarty_tpl->tpl_vars['data']->value["training_id"];?>
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
