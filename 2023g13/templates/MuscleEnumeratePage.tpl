<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
    <table align="center" border="1">
    <tr>
        <th>名前</th>
        <th>レベル</th>
        <th>部分</th>
        <th>目的</th>
        <th>おすすめプロテイン</th>
    </tr>
        {{foreach $datalist as $data}}
            <tr>
                <td><a href="../muscle/MuscleTrainingPage.php/?id={$data["training_id"]}">{{$data["training_name"]}}</a></td>
                <td>{{$data["training_level"]}}</td>
                <td>{{$data["part"]}}</td>
                <td>{{$data["target"]}}</td>
                <td><a href="../muscle/ProteinPage.php/?id={$data["protein_id"]}">{{$data["protein_name"]}}</a></td>
            </tr>
        {{/foreach}}
    </table>
    </body>
</html>