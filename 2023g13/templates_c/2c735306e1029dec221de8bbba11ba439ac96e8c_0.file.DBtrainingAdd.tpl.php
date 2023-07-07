<?php
/* Smarty version 3.1.39, created on 2023-07-07 07:02:14
  from 'C:\xampp\htdocs\pnw\MuscleDojo\2023g13\templates\DBtrainingAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a79c56e2ac76_13075609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c735306e1029dec221de8bbba11ba439ac96e8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\MuscleDojo\\2023g13\\templates\\DBtrainingAdd.tpl',
      1 => 1688704909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a79c56e2ac76_13075609 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング情報を追加する。</title>
        <!--トレーニング情報追加ページ-->
    </head>
    <body>
        <h1>トレーニング情報を追加する。</h1>
        <form action="../muscle/DBtrainingeAddProcess.php" method="post">

        トレーニング名
        ：<input type="text" name="name" id="name" value="<?php if ((isset($_COOKIE['name']))) {
echo $_COOKIE['name'];
}?>" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" id="level" required>
            <!--for文で1から9まで回し、設定したレベルと一緒の時に初期値に設定-->
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (1) : 1-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ((isset($_COOKIE['level']))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value == (int)$_COOKIE['level']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php }?>
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
        <?php if ((isset($_COOKIE['part1']))) {?>
            <input type="checkbox" name="part[]" value="肩" id="part" checked>肩
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="肩" id="part">肩
        <?php }?>
        <?php if ((isset($_COOKIE['part2']))) {?>
            <input type="checkbox" name="part[]" value="腕" id="part" checked>腕
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="腕" id="part">腕
        <?php }?>
        <?php if ((isset($_COOKIE['part3']))) {?>
            <input type="checkbox" name="part[]" value="胸" id="part" checked>胸
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="胸" id="part">胸
        <?php }?>
        <?php if ((isset($_COOKIE['part4']))) {?>
            <input type="checkbox" name="part[]" value="体幹" id="part" checked>体幹
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="体幹" id="part">体幹
        <?php }?>
        <?php if ((isset($_COOKIE['part5']))) {?>
            <input type="checkbox" name="part[]" value="背中" id="part" checked>背中
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="背中" id="part">背中
        <?php }?>
        <?php if ((isset($_COOKIE['part6']))) {?>
            <input type="checkbox" name="part[]" value="脚" id="part" checked>脚
        <?php } else { ?>
            <input type="checkbox" name="part[]" value="脚" id="part">脚
        <?php }?>
        <br>

        目的：<font color="#ff0000">*必須</font><br>
        <?php if ((isset($_COOKIE['target1']))) {?>
            <input type="checkbox" name="target[]" value="バルクアップをしたい" id="target" checked>バルクアップをしたい
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="バルクアップをしたい" id="target">バルクアップをしたい
        <?php }?>
        <?php if ((isset($_COOKIE['target2']))) {?>
            <input type="checkbox" name="target[]" value="細マッチョを目指す" id="target" checked>細マッチョを目指す
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="細マッチョを目指す" id="target">細マッチョを目指す
        <?php }?>
        <?php if ((isset($_COOKIE['target3']))) {?>
            <input type="checkbox" name="target[]" value="ダイエットをしたい" id="target" checked>ダイエットをしたい
        <?php } else { ?>
            <input type="checkbox" name="target[]" value="ダイエットをしたい" id="target">ダイエットをしたい
        <?php }?>
        <br>

        解説：<font color="#ff0000">*必須</font><br>
    <textarea name="desc" cols="100" rows="30" id="desc" required><?php if ((isset($_COOKIE['desc']))) {
echo str_replace("\\n","&#13;",$_COOKIE['desc']);
}?></textarea><br>

        注意事項：<br>
        <textarea name="point" cols="100" rows="30" id="point"><?php if ((isset($_COOKIE['point']))) {
echo str_replace("\\n","&#13;",$_COOKIE['point']);
}?></textarea><br>
        <input type="submit" value="追加">

        </form>
        
        <!-- 下書きをcookieに保存するscript -->
        <?php echo '<script'; ?>
 src="../Script/DBtrainingAdd.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
