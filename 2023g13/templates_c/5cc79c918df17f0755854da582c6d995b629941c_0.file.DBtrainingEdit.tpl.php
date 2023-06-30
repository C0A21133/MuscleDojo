<?php
/* Smarty version 3.1.39, created on 2023-06-30 07:43:17
  from 'C:\xampp\htdocs\pnw\2023g13\MuscleDojo\2023g13\templates\DBtrainingEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e6b75bf0ec0_84984914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc79c918df17f0755854da582c6d995b629941c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g13\\MuscleDojo\\2023g13\\templates\\DBtrainingEdit.tpl',
      1 => 1688103773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e6b75bf0ec0_84984914 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング情報を編集する。</title>
        <!--
        情報編集画面 DBtrainingAddに初期値の設定を加えたもの
        trainingData：クエリパラメータのidを持つtable_trainingの情報。$trainingData[カラム名]で指定
        parts・targets：クエリパラメータのidを持つtable_part・table_targetの情報。array形式で情報のみが入っている。
        -->
    </head>
    <body>
        <h1>トレーニング情報を編集する。</h1>
        <form action="../../muscle/DBtrainingEditProcess.php" method="post">

        トレーニング名
        ：<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['trainingData']->value["training_name"];?>
" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" required>
            <!--for文で1から9まで回し、設定したレベルと一緒の時に初期値に設定-->
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (1) : 1-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == (int)$_smarty_tpl->tpl_vars['trainingData']->value["training_level"]) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                <?php }?>
            <?php }
}
?>
        </select>
        <font color="#ff0000">*必須</font><br>

        部位：<font color="#ff0000">*必須</font><br>
        <!--parts内にデータがあればチェックを付けている-->
        <?php if (in_array("肩",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="肩" checked>肩
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="肩">肩
        <?php }?>
        <?php if (in_array("腕",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="腕" checked>腕
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="腕">腕
        <?php }?>
        <?php if (in_array("胸",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="胸"checked>胸
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="胸">胸
        <?php }?>
        <?php if (in_array("体幹",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="体幹"checked>体幹
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="体幹">体幹
        <?php }?>
        <?php if (in_array("背中",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="背中"checked>背中
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="背中">背中
        <?php }?>
        <?php if (in_array("脚",$_smarty_tpl->tpl_vars['parts']->value)) {?>
            <input type="checkbox" name="part[]" value="脚" checked>脚<br>
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="脚">脚<br>
        <?php }?>

        目的：<font color="#ff0000">*必須</font><br>
        <!--targetsに情報があればチェックを付けている-->
        <?php if (in_array("バルクアップをしたい",$_smarty_tpl->tpl_vars['targets']->value)) {?>
            <input type="checkbox" name="target[]" value="バルクアップをしたい" checked>バルクアップをしたい
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <?php }?>
        <?php if (in_array("細マッチョを目指す",$_smarty_tpl->tpl_vars['targets']->value)) {?>
            <input type="checkbox" name="target[]" value="細マッチョを目指す" checked>細マッチョを目指す
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <?php }?>
        <?php if (in_array("ダイエットをしたい",$_smarty_tpl->tpl_vars['targets']->value)) {?>
            <input type="checkbox" name="target[]" value="ダイエットをしたい" checked>ダイエットをしたい<br>
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>
        <?php }?>

        解説：<font color="#ff0000">*必須</font><br>
        <!--改行部分に<br \>が付いている為、消してから初期値に設定-->
        <textarea name="desc" cols="100" rows="30" required><?php echo str_replace("<br />",'',$_smarty_tpl->tpl_vars['trainingData']->value["training_desc"]);?>
</textarea><br>

        注意事項：<br>
        <!--改行部分に<br \>が付いている為、消してから初期値に設定-->
        <textarea name="point" cols="100" rows="30"><?php echo str_replace("<br />",'',$_smarty_tpl->tpl_vars['trainingData']->value["training_point"]);?>
</textarea><br>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input name="btn" type="submit" value="更新">
        <input name="btn" type="submit" value="削除">
        </form>
    </body>
</html><?php }
}
