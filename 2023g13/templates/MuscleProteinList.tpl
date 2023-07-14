<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>トレーニング一覧 | マッスル道場</title>
        <link rel="stylesheet" href="../cssFolder/Header.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
        <link rel="stylesheet" href="../cssFolder/bg.css">
        <script src="../Script/Header.js" defer></script>
        <!--編集できる情報一覧ページ-->
    </head>
    <body>
        <div class="bg_img">
            <div class="bg_opacity">
                <header id="header">
                    <h1 class="title">マッスル道場</h1>
                    <ul class="header-list">
                        <li class="header-item"><a href="../muscle/TestPage.php">トップページ</a></li>
                        <li class="header-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
                        <li class="header-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
                    </ul>
                </header>

                <main id="main">
                    <h1>プロテイン情報一覧</h1>
                    <ul>
                        <!--phpから送られてきたデータの配列からtraining_idをpathのクエリパラメータに、画面には、training_nameを表示する-->
                        {{foreach $dataList as $data}}
                            <li><h3><a href="{$beforePath}/?id={$data["protein_id"]}">{$data["protein_name"]}</a></h3></li>    
                        {{/foreach}}
                    </ul>
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