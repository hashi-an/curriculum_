<?php

$num = 1;

while($num <= 100) {    //1～100まで繰り返す

    $check3 = $num/3;   //3の倍数判定用
    $check5 = $num/5;   //5の倍数判定用

    if(is_int($check3)){         
        if(is_int($check5)){        //3の倍数であり5の倍数でもある場合「FizzBuzz!」を出力
            echo "FizzBuzz!<br>";    
        }  else{                    //3の倍数の場合 「Fizz!」を出力
            echo "Fizz!<br>";
        }
    } elseif(is_int($check5)){      //5の倍数の場合 「Buzz!」を出力
        echo "Buzz!<br>";
        }  else{
            echo "$num<br>";        //3・5の倍数以外はその数を出力
        }

    $num++;
}

?>