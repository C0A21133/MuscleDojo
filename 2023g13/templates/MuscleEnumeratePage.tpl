<!DOCTYPE html>
<html>
    <head>
        <title>トップページ | マッスル道場</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
        <link rel="stylesheet" href="../cssFolder/Header.css">
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
    <table style = "font-size : 30px;" align="center" border="5">
    <tr>
        <th>名前</th>
        <th>レベル</th>
        <th>部分</th>
        <th>目的</th>
        <th>おすすめプロテイン</th>
    </tr>
    {{foreach $resultList as $data}}
    <!-- $data = ["id", "name", "level", ["part"], ["target"]]  -->
        <tr>
            <td> <a href="../muscle/MuscleTrainingPage.php/?id={$data[0]}">{$data[1]}</a></td>
            <td>{$data[2]}</td>
            <td>{{foreach $data[3] as $part}} {$part} {{/foreach}}</td>
            <td>{{foreach $data[4] as $target}} {$target} {{/foreach}}</td>
            <td>
                <form method="POST" name="FORM{$data[0]}"  action="../muscle/ProteinEnumerate.php"> 
                    <input type="hidden" name="target_list" value="{{foreach $data[4] as $target}}{$target}_{{{/foreach}}}"> 
                    <a href="javascript:FORM{$data[0]}.submit()">検索</a>
                </form>
            </td>
    {{{/foreach}}}
    </table>
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