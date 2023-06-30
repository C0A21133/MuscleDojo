<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニングの情報を変更・削除する。</title>
        <!--編集できる情報一覧ページ-->
    </head>
    <body>
        <h1>トレーニングの情報を変更・削除する。</h1>
        <h2>トレーニング一覧</h2>
        <ul>
            <!--phpから送られてきたデータの配列からtraining_idをpathのクエリパラメータに、画面には、training_nameを表示する-->
            {{foreach $dataList as $data}}
                <li><h3><a href="../muscle/DBtrainingEdit.php/?id={$data["training_id"]}">{$data["training_name"]}</a></h3></li>    
            {{/foreach}}
        </ul>
    </body>
</html>