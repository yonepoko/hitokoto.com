<link rel = "stylesheet" href = "bg.css">

<!DOCTYPE html>
<meta charset="UTF-8">
<title>ひとこと</title>
<h0>・・・・・・・・・・・・</h0>
<h1 class="title">ひとこと</h1>
<h0>・・・・・・・・・・・・</h0>
<link rel = "stylesheet" href = "appstyle.css">
<section>
    <h2>投稿完了</h2>
    <button onclick="location.href='index.php'">戻る</button>
</section>

<?php


$id = null;
$name = $_POST["name"];
$contents = $_POST["contents"];



date_default_timezone_set('Asia/Tokyo');
$created_at = date("Y-m-d H:i:s");
//DB接続情報を設定します。
$pdo = new PDO(
    "mysql:dbname=sample;host=localhost","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);

if ($pdo) {
    
} else {
    echo "DB接続NG";
}
//SQLを実行。
$regist = $pdo->prepare("INSERT INTO post(id, name, contents, created_at) VALUES (:id,:name,:contents,:created_at)");
$regist->bindParam(":id", $id);
$regist->bindParam(":name", $name);
$regist->bindParam(":contents", $contents);
$regist->bindParam(":created_at", $created_at);
$regist->execute();

if ($regist) {
    
} else {
    echo "登録失敗";
}


?>
