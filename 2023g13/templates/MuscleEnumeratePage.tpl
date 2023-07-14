<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
    </head>
    
    <body >
        <div class="bg_img">
            <div class="bg_opacity">
                
    <table style = "font-size : 30px;" align="center" border="5">
    <tr>
        <th>名前</th>
        <th>レベル</th>
        <th>部分</th>
        <th>目的</th>
        <th>おすすめプロテイン</th>
    </tr>
    <!--
        {{foreach $datalist as $data}}
            <tr>
                <td><a href="../muscle/MuscleTrainingPage.php/?id={$data["training_id"]}">{{$data["training_name"]}}</a></td>
                <td>{{$data["training_level"]}}</td>
                <td>{{$data["part"]}}</td>
                <td>{{$data["target"]}}</td>
                <td>
                    <form method="POST" name="FORM{$data["training_id"]}"  action="../muscle/ProteinEnumerate.php"> 
                        <input type="hidden" name="target[]" value="{$data["target"]}"> 
                        <a href="javascript:FORM{$data["training_id"]}.submit()">検索</a>
                    </form>
                </td>
            </tr>
        {{/foreach}}
    -->
    {{foreach $resultList as $data}}
        <tr>
            <td> <a href="../muscle/MuscleTrainingPage.php/?id={$data[0]}">{$data[1]}</a></td>
            <td>{$data[2]}</td>
            <td>{{foreach $data[3] as $part}} {$part} {{/foreach}}</td>
            <td>{{foreach $data[4] as $target}} {$target} {{/foreach}}</td>
            <td>
                <form method="POST" name="FORM{$data[0]}"  action="../muscle/ProteinEnumerate.php"> 
                    <input type="hidden" name="target[]" value="{$data[4]}"> 
                    <a href="javascript:FORM{$data[0]}.submit()">検索</a>
                </form>
            </td>
    {{{/foreach}}}
    </table>
    <footer>
        <h3 id="test">マッスル道場</h3>
        <ul class="footer-list">
            <li class="footer-item"><a href="">トップページ</a></li>
            <li class="footer-item"><a href="../muscle/MuscleTrainingList.php">トレーニング一覧</a></li>
            <li class="footer-item"><a href="../muscle/MuscleProteinList.php">プロテイン一覧</a></li>
            <li class="footer-item"><a href="../muscle/DBadmin.php">管理者用ページ</a></li>
        </ul>
    </footer>
    </body>
</html>