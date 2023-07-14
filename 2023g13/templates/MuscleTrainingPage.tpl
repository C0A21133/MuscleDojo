<!DOCTYPE html>
<html>
    <head>
        <title>{$trainingData["training_name"]} | マッスル道場</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../cssFolder/Header.css">
        <link rel="stylesheet" href="../../cssFolder/Footer.css">
        <link rel="stylesheet" href="../../cssFolder/bg.css">
        <script src="../../Script/Header.js" defer></script>
    </head>
    <body>
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
                    <h1>{$trainingData["training_name"]}</h1>
                    <h3>レベル</h3>
                    {$trainingData["training_level"]}
                    <h3>鍛えられる部位</h3>
                    {foreach $parts as $part}
                        {$part},
                    {/foreach} <br>
                    <h3>目的</h3>
                    {foreach $targets as $target}
                        {$target},
                    {/foreach} <br>
                    <h3>解説</h3>
                    {$trainingData["training_desc"]}
                    <br>
                    <h3>注意事項</h3>
                    {$trainingData["training_point"]}
                    <br>
                </main>

                <footer>
                    <h3 id="test">マッスル道場</h3>
                    <ul class="footer-list">
                        <li class="footer-item"><a href="../muscle/TestPage.php">トップページ</a></li>
                        <li class="footer-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
                        <li class="footer-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
                        <li class="footer-item"><a href="../muscle/DBadmin.php">管理者用ページ</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </body>
</html>