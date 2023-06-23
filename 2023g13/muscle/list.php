<html>  
    <head>
        <meta charset="UTF-8">
        <title>一覧と更新処理</title>
    </head>      
<body>
<h1>一覧と更新処理</h1>
<?php
require("../libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

//入力値がある場合の処理
/*
if(isset($_POST["btn"])){
    $btn_val = $_POST["btn"];
    $id = $_POST["id"];
    $userid = $_POST["userid"];
    $pass = $_POST["pass"];
    
    if($btn_val){
        //特殊文字を文字列として認識させる対策
        $btn_val = htmlspecialchars($_POST["btn"], ENT_QUOTES, "UTF-8");
        switch($btn_val){
            case "追加":
                $sql = $pdo->prepare("INSERT INTO userinfo (userid,password) VALUES (:userid,:pass)");
                $sql->bindValue(":userid", $userid, PDO::PARAM_STR);
                $sql->bindValue(":pass", $pass, PDO::PARAM_STR);
                $sql->execute();
                break;
            case "更新":
                $sql = $pdo->prepare("UPDATE userinfo SET userid=:userid,password=:pass WHERE id=:id");
                $sql->bindValue(":id", $id, PDO::PARAM_STR);
                $sql->bindValue(":userid", $userid, PDO::PARAM_STR);
                $sql->bindValue(":pass", $pass, PDO::PARAM_STR);
                $sql->execute();
                break;
            case "削除":
                $sql = $pdo->prepare("DELETE from userinfo WHERE id=:id");
                $sql->bindValue(":id", $id, PDO::PARAM_STR);
                $sql->execute();
                break;
            default:
                break;
        }
    }
}
*/

$sql = $pdo->prepare("SELECT * from table_training");

//SQL文の実行
$sql->execute();
//結果の取得
$result = $sql->fetchAll();
?>
<table border="1">
<tr>
    <td>ID</td>
    <td>Password</td>
</tr>
<?php
//結果の表示
foreach($result as $loop){	    
//結果を表示
    echo "<tr>";	
    echo "<td>". $loop["training_id"]. "</td>";   
    echo "<td>".$loop["training_name"]. "</td>";
    echo "</tr>";   
}
?>
</table>
<hr/>
<!--
追加の場合は,IDは自動設定されるので指定しないでください．
更新と削除は，ID指定が必須．
<form action="list.php" method="post">
ID: <input type="text" name="id"><br>
ユーザ名：<input type="text" name="userid" required><br>
パスワード：<input type="password" name="pass" required><br>
<input type="submit" name="btn" value="追加">
<input type="submit" name="btn" value="更新">
<input type="submit" name="btn" value="削除">
-->
</form>
</body>
</html>
