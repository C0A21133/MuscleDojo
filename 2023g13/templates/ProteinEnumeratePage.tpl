<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">
        <link rel="stylesheet" href="../cssFolder/Footer.css">
    </head>
    <body onload="Draw()">
        <div class="bg_img">
        <div class="bg_opacity">    
    <table align="center" border="5">
        <tr>
            {{foreach $Column as $column}}
                {if $column['Field'] != "protein_id"}
                    <th>{{$column['Field']}}</th>
                {/if}
            {{/foreach}}
        </tr>
        {{foreach $dataList as $data}}
            <tr>
            {{foreach $Column as $column}}
                {if $column['Field'] != "protein_id"}
                <td>{$data[{$column['Field']}]}</td>
                {/if}
            {{/foreach}}
            </tr>
        {{/foreach}}
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