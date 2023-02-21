<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $hidd_name = $_POST['hidd_name'];
    $an_radio_1 = $_POST['po_radio_1'];
    $an_radio_2 = $_POST['po_radio_2'];
    $an_radio_3 = $_POST['po_radio_3'];
    $hidd_corre = $_POST['hidd_corre'];                 //**  正解値の配列用文字列
?>

<?php 
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

    $corre = explode("@",$hidd_corre);                  //** 正解値の文字列を配列に変える

    $r_no = 1;
                                                        
    while($r_no <= 3) {                                 //**  ラジオボタン1～3を繰り返して　格納値が正解配列に存在しているか評価する。
        if (in_array(${"an_radio_".$r_no}, $corre)) {
            ${"txt_radio_".$r_no}  = "正解！";
            } else {
            ${"txt_radio_".$r_no}  = "残念・・・";
        }
        $r_no++;
    }
?>

<p><!--POST通信で送られてきた名前を表示-->
<?php echo $hidd_name; ?>さんの結果は・・・？</p>

<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $txt_radio_1; ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $txt_radio_2; ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $txt_radio_3; ?>