<?php
require_once 'libDB.php'; // libDB.phpファイルを読み込む

// データベースに接続
$db = new libDB();
$db = new libDB();
$pdo = $db->getPDO();

$sql = $pdo->prepare("SELECT * from table_training WHERE training_id = :training_id");
$sql->execute();
$result = $sql->fetchAll();

//if(!$result){
//echo "ログインに失敗しました．<br>";
//}
//foreach($result as $loop){
//結果を表示
//echo "ログインに成功しました<br>";
//}

// データベースからデータを取得するクエリを実行
$query = "SELECT * FROM table_training"; // table_nameは実際のテーブル名に置き換える

?>