<link rel="stylesheet" href="style.css">

<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $po_name = $_POST['po_name'];


    //①画像を参考に問題文の選択肢の配列を作成してください。
    $radio_1 = ['80', '22', '20','21'];
    $radio_2 = ['PHP', 'Python', 'JAVA','HTML'];
    $radio_3 = ['join', 'select', 'insert','update'];

    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $correct = ['80', '22', '20','21','PHP','HTML','select'];
    $str_correct = implode("@",$correct);                          //** 引き渡し用に文字列にする。
?>

    <!--POST通信で送られてきた名前を出力-->
    <p>お疲れ様です<?php echo $po_name; ?>さん</p>

    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">

        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <h2>①ネットワークのポート番号は何番？</h2>
        <?php
            $text = '<input type="radio" name="po_radio_1" required value=';  //** ラジオボタンと配列内容をアウトプット
            foreach ($radio_1 as  $index => $value) {
                echo $text.$value." />".$value;       
            }
        ?>

        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <h2>②Webページを作成するための言語は？</h2>
        <?php
            $text2 = '<input type="radio" name="po_radio_2" required value=';  //** ラジオボタンと配列内容をアウトプット required=必須
            foreach ($radio_2 as  $index => $value) {
                echo $text2.$value." />".$value;       
            }
        ?>

        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <?php
            $text3 = '<input type="radio" name="po_radio_3" required value=';  //** ラジオボタンと配列内容をアウトプット
            foreach ($radio_3 as  $index => $value) {
                echo $text3.$value." />".$value;       
            }
        ?>
        <br>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="hidd_corre" value="<?php echo $str_correct; ?>">
        <input type="hidden" name="hidd_name" value="<?php  echo $po_name; ?>">      
        <input type="submit" value="回答する" />

    </form>