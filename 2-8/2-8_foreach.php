<?php

//連想配列 3項目
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

//連想配列内容 +”といったら”のアウトプット
foreach ($fruits as $key => $value) {
    echo "{$key}といったら";
    echo "{$value}<br>";
    
}


?>