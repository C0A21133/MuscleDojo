<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>プロテイン情報を追加する。</title>
        <!--プロテイン情報追加ページ-->
    </head>
    <body>
        <h1>プロテインを追加する</h1>
        <form action="../muscle/DBproteinAddProcess.php" method="post">

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
        <input type="radio" name="target" value="バルクアップをしたい">バルクアップをしたい
        <input type="radio" name="target" value="細マッチョを目指す">細マッチョを目指す
        <input type="radio" name="target" value="ダイエットをしたい">ダイエットをしたい<br>
        説明
        :<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">
        </from>
    </body>
</html>
