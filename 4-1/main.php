<?php
// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();


// データを取得するファイルを読み込む
require_once("db_connect.php");

// PDOのインスタンスを取得
$pdo = db_connect();

// getDataクラス内にあるgetUserData・getPostDat関数を実行
//ユーザ情報・投稿情報を取得する
//$postdata = $data ->getPostData();
$sql = "SELECT * FROM posts ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
    <link rel="stylesheet" href="style_4-1.css">
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a>

    <table>
    <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>本文</th>
        <th>投稿日</th>
        <th colspan="3"></th>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td class='small'><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td class='middle'><?php echo $row['content']; ?></td>
            <td class='small'><?php echo $row['time']; ?></td>
            <td cosspan="3" class='small'><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a>
            <a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a>
            <a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="create_post.php">記事投稿！</a>

</body>
</html>