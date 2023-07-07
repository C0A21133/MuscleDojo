<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>target</th>
        <th>desc</th>
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