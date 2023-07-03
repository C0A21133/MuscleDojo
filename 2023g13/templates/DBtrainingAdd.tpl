<!DOCTYPE html>
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
        ：<input type="text" name="name" id="name" value="{if isset($smarty.cookies.name)}{$smarty.cookies.name}{/if}" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" id="level" required>
            <!--for文で1から9まで回し、設定したレベルと一緒の時に初期値に設定-->
            {for $i=1 to 9}
                {if isset($smarty.cookies.level)}
                    {if $i==(int)$smarty.cookies.level}
                        <option value="{$i}" selected>{$i}</option>
                    {else}
                        <option value="{$i}">{$i}</option>
                    {/if}
                {else}
                    <option value="{$i}">{$i}</option>
                {/if}
            {/for}
        </select>
        <font color="#ff0000">*必須</font><br>

        部位：<font color="#ff0000">*必須</font><br>
        {if isset($smarty.cookies.part1)}
            <input type="checkbox" name="part[]" value="肩" id="part" checked>肩
        {else}
            <input type="checkbox" name="part[]" value="肩" id="part">肩
        {/if}
        {if isset($smarty.cookies.part2)}
            <input type="checkbox" name="part[]" value="腕" id="part" checked>腕
        {else}
            <input type="checkbox" name="part[]" value="腕" id="part">腕
        {/if}
        {if isset($smarty.cookies.part3)}
            <input type="checkbox" name="part[]" value="胸" id="part" checked>胸
        {else}
            <input type="checkbox" name="part[]" value="胸" id="part">胸
        {/if}
        {if isset($smarty.cookies.part4)}
            <input type="checkbox" name="part[]" value="体幹" id="part" checked>体幹
        {else}
            <input type="checkbox" name="part[]" value="体幹" id="part">体幹
        {/if}
        {if isset($smarty.cookies.part5)}
            <input type="checkbox" name="part[]" value="背中" id="part" checked>背中
        {else}
            <input type="checkbox" name="part[]" value="背中" id="part">背中
        {/if}
        {if isset($smarty.cookies.part6)}
            <input type="checkbox" name="part[]" value="脚" id="part" checked>脚
        {else}
            <input type="checkbox" name="part[]" value="脚" id="part">脚
        {/if}
        <br>

        目的：<font color="#ff0000">*必須</font><br>
        {if isset($smarty.cookies.target1)}
            <input type="checkbox" name="target[]" value="バルクアップをしたい" id="target" checked>バルクアップをしたい
        {else}
            <input type="checkbox" name="target[]" value="バルクアップをしたい" id="target">バルクアップをしたい
        {/if}
        {if isset($smarty.cookies.target2)}
            <input type="checkbox" name="target[]" value="細マッチョを目指す" id="target" checked>細マッチョを目指す
        {else}
            <input type="checkbox" name="target[]" value="細マッチョを目指す" id="target">細マッチョを目指す
        {/if}
        {if isset($smarty.cookies.target3)}
            <input type="checkbox" name="target[]" value="ダイエットをしたい" id="target" checked>ダイエットをしたい
        {else}
            <input type="checkbox" name="target[]" value="ダイエットをしたい" id="target">ダイエットをしたい
        {/if}
        <br>

        解説：<font color="#ff0000">*必須</font><br>
    <textarea name="desc" cols="100" rows="30" id="desc" required>{if isset($smarty.cookies.desc)}{str_replace("\\n","&#13;",$smarty.cookies.desc)}{/if}</textarea><br>

        注意事項：<br>
        <textarea name="point" cols="100" rows="30" id="point">{if isset($smarty.cookies.point)}{str_replace("\\n","&#13;",$smarty.cookies.point)}{/if}</textarea><br>
        <input type="submit" value="追加">

        </form>
        
        <!-- 下書きをcookieに保存するscript -->
        <script src="../Script/DBtrainingAdd.js"></script>
    </body>
</html>