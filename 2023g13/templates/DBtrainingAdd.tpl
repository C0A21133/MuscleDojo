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
        <input type="checkbox" name="part" value="肩">肩
        <input type="checkbox" name="part" value="腕">腕
        <input type="checkbox" name="part" value="胸">胸
        <input type="checkbox" name="part" value="体幹">体幹
        <input type="checkbox" name="part" value="背中">背中
        <input type="checkbox" name="part" value="脚">脚<br>

        目的：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>

        解説：<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30" required></textarea><br>

        注意事項：<br>
        <textarea name="point" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">

        </form>
        
        <!-- 入力情報保持機能(beta版)
        {literal}
            <script>
                
                console.log(document.cookie);
                //cookieを取得
                const cookie = document.cookie;

                //イベント処理
                window.addEventListener('DOMContentLoaded', function(){

                    // テキストエリアのHTML要素を取得
                    let name = document.getElementById("name");
                    let level = document.getElementById("level");
                    let parts = document.querySelectorAll("input[name=part]");


                    // トレーニング名を入力時に実行
                    name.addEventListener("input",function(){
                        //cookieに保存
                        document.cookie = 'name='+this.value;
                    });

                    //レベル選択時に実行
                    level.addEventListener("input",function(){
                        //cookieに保存
                        document.cookie = "level="+this.value;
                    });

                    //部位選択時に実行
                    for(var i in parts){
                        let part = parts[i];
                        let num = i;
                        part.addEventListener("input",function(){
                            document.cookie = "part"+num+"=1";
                            console.log(this.value);
                            console.log(document.cookie);
                        })
                    }
                });
            </script>
        {/literal}

        -->
    </body>
</html>