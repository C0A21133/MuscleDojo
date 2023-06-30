<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../cssFolder/StartPage.css">
    <meta charset="utf-8">
    </head>
    <div class="header-box"></div>
    <header>
        <h1 class = "logo">まっする</h1>
        <nav class="pc-menu">
            <ul>
                
            </ul>
        </nav>
    </header>
    
    <body onload='Draw()'>
    <div class="BGImage">
        <h1 class="front" style="text-align: center;"><font size="7" color = "#ffa500" >マッスル道場</font></h1>
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
    
    <script src="../Script/StartPage.js"></script>
    </body>
    
</html>
