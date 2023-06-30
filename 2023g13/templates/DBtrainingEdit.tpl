<!DOCTYPE html>
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
        ：<input type="text" name="name" value="{$trainingData["training_name"]}" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" required>
            <!--for文で1から9まで回し、設定したレベルと一緒の時に初期値に設定-->
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
        <!--parts内にデータがあればチェックを付けている-->
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
        <!--targetsに情報があればチェックを付けている-->
        {if in_array("バルクアップをしたい",$targets)}
            <input type="checkbox" name="target[]" value="バルクアップをしたい" checked>バルクアップをしたい
        {else}
            <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        {/if}
        {if in_array("細マッチョを目指す",$targets)}
            <input type="checkbox" name="target[]" value="細マッチョを目指す" checked>細マッチョを目指す
        {else}
            <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        {/if}
        {if in_array("ダイエットをしたい",$targets)}
            <input type="checkbox" name="target[]" value="ダイエットをしたい" checked>ダイエットをしたい<br>
        {else}
            <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>
        {/if}

        解説：<font color="#ff0000">*必須</font><br>
        <!--改行部分に<br \>が付いている為、消してから初期値に設定-->
        <textarea name="desc" cols="100" rows="30" required>{str_replace("<br />","",$trainingData["training_desc"])}</textarea><br>

        注意事項：<br>
        <!--改行部分に<br \>が付いている為、消してから初期値に設定-->
        <textarea name="point" cols="100" rows="30">{str_replace("<br />","",$trainingData["training_point"])}</textarea><br>
        <input type="hidden" name="id" value="{$id}">
        <input name="btn" type="submit" value="更新">
        <input name="btn" type="submit" value="削除">
        </form>
    </body>
</html>