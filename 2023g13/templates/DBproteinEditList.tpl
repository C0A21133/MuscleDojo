<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>プロテインの情報を変更・削除する。</title>
        <!--編集できる情報一覧ページ-->
    </head>
    <body>
        <h1>プロテインの情報を変更・削除する。</h1>
        <h2>プロテイン一覧</h2>
        <ul>
            <!--phpから送られてきたデータの配列からtraining_idをpathのクエリパラメータに、画面には、training_nameを表示する-->
            {{foreach $dataList as $data}}
                <li><h3><a href="../muscle/DBproteinEdit.php/?id={$data["protein_id"]}">{$data["protein_name"]}</a></h3></li>    
            {{/foreach}}
        </ul>
    </body>
</html>