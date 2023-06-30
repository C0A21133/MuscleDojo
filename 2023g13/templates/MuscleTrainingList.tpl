<!DOCTYPE html>
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
            {{foreach $dataList as $data}}
                <li><h3><a href="{$beforePath}/?id={$data["training_id"]}">{$data["training_name"]}</a></h3></li>    
            {{/foreach}}
        </ul>
    </body>
</html>