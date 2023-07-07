<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>プロテイン情報を追加する。</title>
        <!--プロテイン情報追加ページ-->
    </head>
    <body>
        <h1>プロテインを追加する</h1>
        <form action="../../muscle/DBproteinEditProcess.php" method="post">

        メーカー
        :<input type="text" name="maker" value="{$proteinData["protein_maker"]}" required>
        <font color="ff0000">*必須</font><br>
        プロテイン名
        :<input type="text" name="name" value="{$proteinData["protein_name"]}" required>
        <font color="ff0000">*必須</font><br>
        値段
        :<input type="int" name="price" value="{$proteinData["protein_price"]}" required>
        <font color="ff0000">*必須</font><br>
        グラム数
        :<input type="int" name="weight" value="{$proteinData["protein_weight"]}" required>
        <font color="ff0000">*必須</font><br>
        目的
        :<font color="#ff0000">*必須</font><br>
        {if $proteinData["protein_target"]=="バルクアップをしたい"}
            <input type="radio" name="target" value="バルクアップをしたい" checked>バルクアップをしたい
        {else}
            <input type="radio" name="target" value="バルクアップをしたい">バルクアップをしたい
        {/if}
        {if $proteinData["protein_target"]=="細マッチョを目指す"}
            <input type="radio" name="target" value="細マッチョを目指す" checked>細マッチョを目指す
        {else}
            <input type="radio" name="target" value="細マッチョを目指す">細マッチョを目指す
        {/if}
        {if $proteinData["protein_target"]=="ダイエットをしたい"}
            <input type="radio" name="target" value="ダイエットをしたい" checked>ダイエットをしたい<br>
        {else}
            <input type="radio" name="target" value="ダイエットをしたい">ダイエットをしたい<br>
        {/if}
        
        
        説明
        :<font color="#ff0000">*必須</font><br>
        <textarea name="desc" cols="100" rows="30">{str_replace("<br />","",$proteinData["protein_desc"])}</textarea><br>
        <input type="hidden" name="id" value="{$proteinData["protein_id"]}">
        <input type="submit" name="btn" value="更新">
        <input type="submit" name="btn" value="削除">
        </from>
    </body>
</html>
