<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>プロテイン情報を追加する。</title>
    </head>
    <body>
        <h1>プロテインを追加する</h1>
        <from action="" method="post">

        メーカー
        :<input type="text" name="maker" required>
        <font color="ff0000">*必須</font><br>
        プロテイン名
        :<input type="text" name="name" required>
        <font color="ff0000">*必須</font><br>
        値段
        :<input type="int" name="price" required>
        <font color="ff0000">*必須</font><br>
        グラム数
        :<input type="int" name="weight" required>
        <font color="ff0000">*必須</font><br>
        目的
        :<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="part[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="checkbox" name="part[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="checkbox" name="part[]" value="ダイエットをしたい">ダイエットをしたい<br>
        説明
        :<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">
        
    </body>
</html>
