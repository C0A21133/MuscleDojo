<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/Header.css">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
        <link rel="stylesheet" href="../cssFolder/bg.css">
        <script src="../Script/Header.js" defer></script>
    </head>
    <body >
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
            <table style="font-size : 30px;" align="center" border="5">
                <tr>
                    <th>名前</th>
                    <th>値段</th>
                    <th>目的</th>
                    <th>メーカー</th>
                    <th>重さ</th>
                </tr>
                {{foreach $dataList as $data}}
                    <tr>
                    <td><a href="../muscle/ProteinPage.php/?id={$data["protein_id"]}">{{$data["protein_name"]}}</a></td>
                    <td>{$data["protein_price"]}</td>
                    <td>{$data["protein_target"]}</td>
                    <td>{$data["protein_maker"]}</td>
                    <td>{$data["protein_weight"]}</td>
                    </tr>
                {{/foreach}}
            </table>
        </main>
        <footer>
            <h3 id="test">マッスル道場</h3>
            <ul class="footer-list">
                <li class="footer-item"><a href="../muscle/StartPage.php">トップページ</a></li>
                <li class="footer-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
                <li class="footer-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
                <li class="footer-item"><a href="../muscle/DBadmin.php">管理者用ページ</a></li>
            </ul>
        </footer>
        </div>
        </div>
    </body>
</html><p></p>
