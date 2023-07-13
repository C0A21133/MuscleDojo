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
    </body>
</html>