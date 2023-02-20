
<?php
    //---------------------すごろくstart
    $sum = 0;
    $cnt = 1;

    while($sum <= 40) {            //40になるまで繰り返す
        $saikoro = mt_rand(1, 6);  //1～6の範囲（サイコロ）でランダムに数値を表示させる。
        echo $cnt.'回目＝'.$saikoro.'<br>';  
        $sum = $sum + $saikoro;
        $cnt++;  
    }

    $cnt = $cnt-1;
    echo '合計'.$cnt.'回でゴールしました<br><br><br>';  
    //---------------------すごろくend



    
    //---------------------あいさつ start
    date_default_timezone_set('Asia/Tokyo');   // タイムゾーンを変更
    
    $time = date('H');                         //現在の時間をセット

    echo '今'.$time.'時台です<br>';

    if(($time >= 4)&&($time <= 10)){            //4時～10時は　おはようございます
        echo "おはようございます<br>";
    }
    elseif(($time >= 11)&&($time <= 16)){       //11時～16時は　こんにちは
        echo "こんにちは<br>";
    }
    else {
        echo "こんばんは<br>";                   //以外は　こんばんは
    }

    //---------------------あいさつ end
?>