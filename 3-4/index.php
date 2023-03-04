
<?php

    // データを取得するファイルを読み込む
    require_once("getData.php");

    // PDOインスタンスを作成する 関数connect()からPDOを取得する
    $pdo = connect();

    // getData.php内の、getDataクラスをインスタンス化
    $data = new getData();

    // getDataクラス内にあるgetUserData・getPostDat関数を実行
    //ユーザ情報・投稿情報を取得する
    $userData = $data ->getUserData();
    $postdata = $data ->getPostData();

    //htmlのテーブルを作成
        $table = '
        <table>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            ';

            //一行づつ格納する
            while ($row = $postdata->fetch(PDO::FETCH_ASSOC)) {

            $table .= '
                <tr>
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["title"].'</td>
            ';   
                                    //カテゴリ番号から表示用変換                               
                                    switch( $row['category_no'] )
                                    {
                                        case 1:
                                            $cate_con="食事";
                                            break; 
                                        case 2:
                                            $cate_con="旅行";
                                            break;
                                        default:
                                            $cate_con="その他";
                                    }
            $table .= '
                                    <td>'.$cate_con.'</td>
                                    <td>'.$row["comment"].'</td>
                                    <td>'.$row["created"].'</td>
                                </tr>
                                
            ';
            }
            $table .= '</table>';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>3章チェックテスト</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="h_header clearfix">
            <div class="h_left"><img src="1599315827_logo.png" width="100%"></div>
            <div class="h_right1"><p>ようこそ <?php echo $userData['last_name'].$userData['first_name']; ?> さん</p></div>
            <div class="h_right2"><p>最終ログイン日：<?php echo $userData['last_login']; ?></p></div> 
        </div> 
        <div class="main">

            <!-- PHPで作成したテーブルを出力   -->
            <?php echo $table; ?>

        </div> 
        <div class="footer">Y&I group.inc</div> 
    </body> 

</html>

