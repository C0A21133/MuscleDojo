<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    
    <table>
    <tr>
        <th>id</th>
        <th>level</th>
        <th>name</th>
        <th>setumi</th>
    </tr>
        {{foreach $dataList as $data}}
            <tr>
            {{foreach $Column as $column}}
                <td>{$data[{$column['Field']}]}</td>
            {{/foreach}}
            </tr>
        {{/foreach}}
    </table>
    </body>
</html>