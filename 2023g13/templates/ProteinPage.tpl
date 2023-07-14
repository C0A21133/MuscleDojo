<!DOCTYPE html>
<html>
    <head>
        <title>{$proteinData["protein_name"]} | マッスル道場</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/Header.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
        <link rel="stylesheet" href="../cssFolder/bg.css">
        <script src="../Script/Header.js" defer></script>
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
                    <h1>{$proteinData["protein_name"]}</h1>
                    <h3>メーカー</h3>
                    {$proteinData["protein_maker"]}
                    <h3>目的</h3>
                    {$proteinData["protein_target"]}
                    <br>
                    <h3>解説</h3>
                    {$proteinData["protein_desc"]}
                    <br>
                    <h3>値段</h3>
                    {$proteinData["protein_price"]}
                    <br>
                    <h3>重さ</h3>
                    {$proteinData["protein_weight"]}
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