<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <style>
    .canvas-wrap{
            width: 600px;
            max-width: 100%;
            position: relative;
            padding: 0;
            box-sizing: content-box;
    }
    .canvas_warp:before{
        content:"";
        display: block;
        padding-top: 50%;
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
    }
    </style>
    </head>
    <body onload='Draw()'>
    <div class="canvas-wrap" id="canvasdiv">
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
        <script src="../Script/StartPage.js"></script>
    </body>
    
</html>
