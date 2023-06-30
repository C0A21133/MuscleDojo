<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <style>
    .canvas-wrap-front{
            width: 600px;
            max-width: 100%;
            position: relative;
            padding: 0;
            box-sizing: content-box;
            top:100px;
            left:100px;
            z-index: 3;

    }
    .canvas-wrap-back{
            width: 600px;
            max-width: 100%;
            position: relative;
            padding: 0;
            box-sizing: content-box;
            top: 400px;
            left:100px;
            z-index: 3;

    }
    
    .canvas{
        position: absolute;
            left:0;
        top:0;
        border: 0;
        max-width:100%;
        box-sizing: content-box;
        padding: 0;
        margin: 0;
        z-index: 3;
    }

    .BGImage{
        position: relative;
        z-index: 1;
        background-image: url("../Resources/Images/Background/bg.jpg");
        background-size: cover;
        background-repeat:no-repeat;
        background-position: center;
        width: 200vh;
        height: 200vh;
    }
    .BGImage::after{
        content: "";
        position: absolute;
        z-index: 2;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: white;
        opacity: 0.5;
    }
    
    .front{
        position: relative;
        z-index: 3;
    }
    </style>
    
    </head>
    <body onload='Draw()'>
    <div class="BGImage">
            <h2 class="front">aaaaaaaaaaa</h2>
    
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
