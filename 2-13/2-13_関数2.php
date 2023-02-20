<?php

//--------組込み関数

    $x = 3.14;
    echo '元となる値＝3.14<br>';
    echo 'ceil（切り上げ）-->'.ceil($x).'<br>';
    echo 'floor（切り捨て）-->'.floor($x).'<br>';
    echo 'round（四捨五入）-->'.round($x).'<br><br>';


//--------pi（円周率）を使って半径6cmの円周と円の面積を出力する。
    echo '円周率＝'.pi().'<br>';   

    circleArea(6);      //半径6cm
  
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        $circumference = 2 * $r * pi();
        echo '半径が'.$r.'cmの円の面積：'.$circle_area.'㎠　／　円周：'.$circumference.'cm<br>'; 
        echo '半径が'.$r.'cmの円の面積：約'.round($circle_area,3).'㎠　／　円周：約'.round($circumference,3).'cm<br><br>'; 
    }


//--------200～250の範囲でランダムに数値を表示させる。
    echo 'mt_rand（乱数）200～250で表示　-->'.mt_rand(200, 250).'<br><br>';


//--------「LetsEngineer」の文字数を表示
    $str = "LetsEngineer";
    echo '「'.$str.'」のstrlen（文字列の長さ）-->'. strlen($str).'<br><br>';


//--------「LetsEngineer」の「L」「i」の位置を表示 （大文字小文字判断）
    echo '「'.$str.'」内の「L」の位置は　strpos（検索）-->'.  strpos($str, "L").'<br>';
    echo '「'.$str.'」内の「s」の位置は　strpos（検索）-->'.  strpos($str, "s").'<br><br>';    


//--------「LetsEngineer」の一部を切り取り表示
    echo '「'.$str.'」のsubstr（文字列の切り取り）後ろから5文字目から3文字-->'. substr($str, -5, 3).'<br><br>';    


//--------「LetsEngineer」の一部を置き換え表示
    echo '「'.$str.'」の「e」を「え」にstr_replace（置換）-->'. str_replace("e", "え", $str).'<br><br>'; 


//--------「LetsEngineer」の一部を置き換え表示
    //printf（フォーマット化した文字列を出力）
    
    $month = date('m');
    $event = "お買い物マラソン";
    $start_day = 4;
    $end_day = 11;

    echo '↓　printf（フォーマット化した文字列を出力）-- %02d='.$month.'　%s='.$event.'　%d='.$start_day.'と'.$end_day.'<br>';
    printf("今月(%02d月)の%sは%d日～%d日でした。<br><br>",$month, $event,$start_day,$end_day);

?>