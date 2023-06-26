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
        <canvas  id="canvas" width="282" height="400" class="canvas"></canvas>
        <!-- スクリプトで描写するほうが記述量が少ないが、描写する部分はまとめて記述したいのでHTMLで記述した -->
        <canvas  id="0canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="1canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="2canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="3canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="4canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="5canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="6canvas" width="282" height="400" class="canvas"></canvas>
        <canvas  id="7canvas" width="282" height="400" class="canvas"></canvas>

        <!-- 判定用のキャンバス -->
        <canvas  id="frontjudgecanvas" width="282" height="400" class="canvas"></canvas>
    </div>
        <text id="textarea"></text>
        <script src="../Script/StartPage.js"></script>
    </body>
    
</html>