<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング情報を編集する。</title>
    </head>
    <body>
        <h1>トレーニング情報を編集する。</h1>
        <form action="../muscle/DBtrainingeAddProcess.php" method="post">

        トレーニング名
        ：<input type="text" name="name" value="{$trainingData["training_name"]}" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" required>
            {for $i=1 to 9}
                {if $i==(int)$trainingData["training_level"]}
                    <option value="{$i}" selected>{$i}</option>
                {else}
                    <option value="{$i}">{$i}</option>
                {/if}
            {/for}
        </select>
        <font color="#ff0000">*必須</font><br>

        部位：<font color="#ff0000">*必須</font><br>
        {if in_array("肩",$parts)}
            <input type="checkbox" name="part[]" value="肩" checked>肩
        {else}
            <input type="checkbox" name="part[]" value="肩">肩
        {/if}
        {if in_array("腕",$parts)}
            <input type="checkbox" name="part[]" value="腕" checked>腕
        {else}
            <input type="checkbox" name="part[]" value="腕">腕
        {/if}
        {if in_array("胸",$parts)}
            <input type="checkbox" name="part[]" value="胸"checked>胸
        {else}
            <input type="checkbox" name="part[]" value="胸">胸
        {/if}
        {if in_array("体幹",$parts)}
            <input type="checkbox" name="part[]" value="体幹"checked>体幹
        {else}
            <input type="checkbox" name="part[]" value="体幹">体幹
        {/if}
        {if in_array("背中",$parts)}
            <input type="checkbox" name="part[]" value="背中"checked>背中
        {else}
            <input type="checkbox" name="part[]" value="背中">背中
        {/if}
        {if in_array("脚",$parts)}
            <input type="checkbox" name="part[]" value="脚" checked>脚<br>
        {else}
            <input type="checkbox" name="part[]" value="脚">脚<br>
        {/if}

        目的：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>

        解説：<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30" required>{str_replace("<br />","",$trainingData["training_desc"])}</textarea><br>

        注意事項：<br>
        <textarea name="point" cols="100" rows="30">{str_replace("<br />","",$trainingData["training_point"])}</textarea><br>
        <input type="submit" value="追加">

        </form>
        {foreach $parts as $part}
            <h3>{$part}</h3><br>
        {/foreach}
        {in_array("肩",$parts)}
    </body>
</html>