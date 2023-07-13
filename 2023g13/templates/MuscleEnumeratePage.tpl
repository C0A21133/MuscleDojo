<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/TestPage.css">
    </head>
    
    <body onload="Draw()">
        <div class="bg_img">
            <div class="bg_opacity">
                <table align="center" border="1">
                <tr>
                {{foreach $Column as $column}}
                    {if $column['Field'] != "training_id"}
                        <th>{{$column['Field']}}</th>
                    {/if}
                {{/foreach}}
                        <th>部分</th>
                        <th>目的</th>
                        <th>おすすめプロテイン</th>
                </tr>
        {{foreach $datalist as $data}}
            <tr>
            {{foreach $Column as $column}}
                {if $column['Field'] != "training_id"}
                    <td>{$data[{$column['Field']}]}</td>
                {/if}
                
            {{/foreach}}
            <td>{{$data["part"]}}</td>
            <td>{{$data["target"]}}</td>
            <td><a href="../muscle/ProteinPage.php/?id={$data["protein_id"]}">{{$data["protein_name"]}}</a></td>
            </tr>
        {{/foreach}}
    </table>
    </body>
</html>