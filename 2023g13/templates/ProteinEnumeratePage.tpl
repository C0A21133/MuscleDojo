<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../cssFolder/StartPage.css">
    </head>
    <div class="BGImage">
    <body>
    <table border="1" align="center" class="front">
    <div class="header-box"></div>
    <header>
        <h1 class = "logo">まっする</h1>
        <nav class="pc-menu">
            <ul>
                
            </ul>
        </nav>
    </header>
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
    </div>
</html>