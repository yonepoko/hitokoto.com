<link rel = "stylesheet" href = "bg.css">

<?php

$pdo = new PDO(
    "mysql:dbname=sample;host=localhost","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);

if ($pdo) {
    
} else {
    echo "DB接続NG";
}

$regist = $pdo->prepare("SELECT * FROM post order by created_at DESC limit 20");
$regist->execute();

if ($regist) {
    
} else {
    echo "登録失敗";
}
?>



<!DOCTYPE html>

<meta charset="UTF-8">
<title>ひとこと</title>
<h0>・・・・・・・・・・・・</h0>
<h1 class = "title">ひとこと</h1>
<h0>・・・・・・・・・・・・</h0>
<link rel = "stylesheet" href = "appstyle.css">
<section>
    <div class="ff">新規投稿</div>
    <form action="send.php" method="post">
        おなまえ : <input required type="text" name="name" value=""><br>
        ひとこと: <input required type="text" name="contents" value=""><br>
        <button type="submit">投稿</button>        
    </form>
    <h3>------------------------------------------</h3>
</section>
