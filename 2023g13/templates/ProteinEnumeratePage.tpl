<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
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