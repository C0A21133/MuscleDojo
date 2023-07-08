<!DOCTYPE html>
<html>
    <head>
        <title>トップページ | マッスル道場</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/Header.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">        
        <script src="../Script/Header.js" defer></script>
        <script src="../Script/StartPage.js" defer></script>
    </head>    
    <body onload="Draw()">
        <div class="bg_img">
            <div class="bg_opacity">
                <header id="header">
                    <h1 class="title">マッスル道場</h1>
                    <ul class="header-list">
                        <li class="header-item"><a href="">トップページ</a></li>
                        <li class="header-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
                        <li class="header-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
                    </ul>
                </header>

                <main id="main">
                    <div class="canvases">
                        <h3>鍛えたい部位をクリック!</h3>
                        <div class="canvas-wrap-front" id="canvasdiv">
                            <canvas  id="frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <!-- スクリプトで描写するほうが記述量が少ないが、描写処理はまとめて記述したいのでHTMLで記述した -->
                
                            <!-- 画像を増やす場合、idの先頭の数字を一つづつ増やした<canvas>をコピペで記述
                                startPage.js の frontMuscleArray配列に パスを追記。
                                clickOnCanvas()とmoveOnCanvas()に行いたい処理を記述すること
                                idはStartPage.jsのfrontMuscleArrayの要素のインデックス番号+frontCanvas
                            -->
                            <canvas  id="0frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="1frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="2frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="3frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="4frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="5frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="6frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="7frontCanvas" width="282" height="400" class="canvas"></canvas>
                            <!-- 判定用のキャンバス -->
                            <canvas  id="frontJudgeCanvas" width="282" height="400" class="canvas"></canvas>
                        </div>
                        <div class="canvas-wrap-back">
                            <canvas  id="backCanvas" width="282" height="400" class="canvas"></canvas>
                
                            <canvas  id="0backCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas  id="1backCanvas" width="282" height="400" class="canvas"></canvas>
                            <canvas id="2backCanvas" width="282" height="400" class="canvas"></canvas>
                
                            <canvas  id="backJudgeCanvas" width="282" height="400" class="canvas"></canvas>
                        </div>
                    </div>
                    <div class="form">
                        <form action="" class="training">
                            <h3>フォームからトレーニング方法を検索する</h3>
                            トレーニング名:<input type="text" name="tr_name" ><br>
                            レベル:
                            <select name="tr_level" >
                                {for $i=1 to 9}
                                    <option value="{$i}">{$i}</option>
                                {/for}
                            </select><br>
                            部位：
                            <input type="checkbox" name="part[]" value="肩">肩
                            <input type="checkbox" name="part[]" value="腕">腕
                            <input type="checkbox" name="part[]" value="胸">胸
                            <input type="checkbox" name="part[]" value="体幹">体幹
                            <input type="checkbox" name="part[]" value="背中">背中
                            <input type="checkbox" name="part[]" value="脚">脚<br>
                            目的：
                            <input type="checkbox" name="target[]" value="バルクアップをしたい">バルクアップをしたい
                            <input type="checkbox" name="target[]" value="細マッチョを目指す">細マッチョを目指す
                            <input type="checkbox" name="target[]" value="ダイエットをしたい">ダイエットをしたい<br>
                            <input type="submit" value="検索">
                        </form>
                        <form action="" class="protein">
                            <h3>フォームからトレーニング方法を検索する</h3>
                            メーカー:<input type="text" name="maker"><br>
                            プロテイン名:<input type="text" name="name"><br>
                            値段:<input type="int" name="price"><br>
                            グラム数:<input type="int" name="weight"><br>
                            目的:
                            <input type="radio" name="target" value="バルクアップをしたい">バルクアップをしたい
                            <input type="radio" name="target" value="細マッチョを目指す">細マッチョを目指す
                            <input type="radio" name="target" value="ダイエットをしたい">ダイエットをしたい<br>
                            <input type="submit" value="検索">
                        </form>
                    </div>
                </main>

                <footer>
                    <h3 id="test">マッスル道場</h3>
                    <ul class="footer-list">
                        <li class="footer-item"><a href="">トップページ</a></li>
                        <li class="footer-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
                        <li class="footer-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
                        <li class="footer-item"><a href="../muscle/DBadmin.php">管理者用ページ</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </body>
    
</html>