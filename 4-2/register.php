<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');
// 関数をまとめたファイルを読み込む
require_once('function.php');

// メッセージ初期化
$userError = '';
$passError = '';
$okMessage = '';
$db_error = '';

// フォームから値が送信されているか
if (isset($_POST["register"])) {
    // ユーザー名が未入力の場合
    if (empty($_POST['username'])) {
        $userError = 'ユーザー名が未入力です。';
    // パスワードが未入力の場合
    } 
    if (empty($_POST['password'])) {
        $passError = 'パスワードが未入力です。';
    }

    // データとして入るユーザー名、パスワードがあるか確認
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // どちらもあった場合のみ変数に代入

        $username = htmlspecialchars($_POST['username'],ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'],ENT_QUOTES);

        // PDOインスタンスを取得
        $pdo = db_connect();

        try {
            $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
            $stmt = $pdo->prepare($sql);
            // ユーザー名をバインド
            $stmt->bindParam(':name',$username);
            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            // パスワードをバインド
            $stmt->bindParam(':password',$password_hash);
            $stmt->execute();
            $okMessage = 'ユーザーの登録が完了しました。';
        } catch (PDOException $e) {
            $db_error = 'データベースエラー';
        }
    }
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

    <h2>ユーザー新規登録</h2><br>

   
    <form action="register.php" method="post">
        <input placeholder="ユーザー名" type="text" name="username" id="name" style="width: 250px; height: 30px;border-radius: 5px;">
        <br>
        <input placeholder="パスワード" type="password" name="password" id="password" style="width: 250px; height: 30px; margin-top: 15px;;border-radius: 5px;">
        <br>
        <input class="button" type="submit" value="新規登録" name="register" id="register">
        <br><br>
        <font color="ACFF84"><?php echo htmlspecialchars($okMessage, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($userError, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($passError, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($db_error, ENT_QUOTES); ?></font><br>
 </form>
</body>
</html>