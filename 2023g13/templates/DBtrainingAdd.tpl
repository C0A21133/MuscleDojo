<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング情報を追加する。</title>
    </head>
    <body>
        <h1>トレーニング情報を追加する。</h1>
        <form action="../muscle/DBtrainingeAddProcess.php" method="post">

        トレーニング名
        ：<input type="text" name="name" required>
        <font color="#ff0000">*必須</font><br>
        レベル
        ：<select name="level" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
        </select>
        <font color="#ff0000">*必須</font><br>

        部位：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="part[]" value="肩">肩
        <input type="checkbox" name="part[]" value="腕">腕
        <input type="checkbox" name="part[]" value="胸">胸
        <input type="checkbox" name="part[]" value="体幹">体幹
        <input type="checkbox" name="part[]" value="背中">背中
        <input type="checkbox" name="part[]" value="脚">脚<br>

        目的：<font color="#ff0000">*必須</font><br>
        <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
        <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
        <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>

        解説：<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30"></textarea><br>

        注意事項：<font color="#ff0000">*必須</font><br>
        <textarea name="point" cols="100" rows="30"></textarea><br>
        <input type="submit" value="追加">


        </form>
    </body>
</html>