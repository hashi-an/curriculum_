<?php

//--------count（要素の数を数える）
    $fish_mem = ["いわし", "にしん", "さば", "とびうお"];
    echo 'count（要素の数を数える）-->'.count($fish_mem).'<br><br>';


//--------sort（要素の並べ替え）
    sort($fish_mem);
    var_dump($fish_mem);
    echo '<br><br>';

    $numbers = [26, 35, 17, 67, 45];
    sort($numbers);
    var_dump($numbers);
    echo '<br><br>';


//--------in_array（配列に中にある要素が存在しているか）-->bool(true) or bool(false)　
    var_dump(in_array("さば", $fish_mem));
    echo '<br>';
    var_dump(in_array("まぐろ", $fish_mem));
    echo '<br><br>';


//--------in_array(調べたい文字もしくは数値, 対象の配列)
    if (in_array("にしん", $fish_mem)) {
        echo "にしん がいるよ！";
    } else {
        echo "にしん はいないよ！";
    }
        echo '<br><br>';


//--------implode（配列を結合して文字列に変換）"#"任意の文字・無くても可
    $atstr = implode("#", $fish_mem);
    var_dump($atstr);
    echo '<br><br>';


//--------explode（文字列を指定の区切りで配列にする）一度implodeで文字列を作成後に配列へ
    $atstr = implode("$", $fish_mem);
    var_dump($atstr);
    echo '<br><br>';


    $re_fish_mem = explode("$", $atstr);
    var_dump($re_fish_mem);
    echo '<br><br>';


    //-------explode（文字列を指定の区切りで配列にする）　カンマ区切りdetaを配列へ
    $str = "1,2,3,4,5";
    $array = explode(",",$str);
    var_dump($array);
    echo '<br><br>';

?>