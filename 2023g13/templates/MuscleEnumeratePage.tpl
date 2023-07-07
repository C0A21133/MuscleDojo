<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/StartPage.css">
    </head>
    <div class="header-box"></div>
    <header>
        <h1 class = "logo">まっする</h1>
        <nav class="pc-menu">
            <ul>
                
            </ul>
        </nav>
    </header>
    <div class="BGImage">
    <body>
    <table align="center" border="1" class="front enumerateTable">
    <tr>
        <th>id</th>
        <th>level</th>
        <th>name</th>
        <th>setumi</th>
        <th>point</th>
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
    </div>
</html>