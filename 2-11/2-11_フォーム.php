<?php

//縦=5cm、横=10cm、高さ=8cmの直方体の体積


function Rectangular($Length,$Width,$Height) {
    $taiseki = $Length * $Width * $Height;
    print "直方体の体積は".$taiseki."㎤です。";
}

// 値)
Rectangular(5,10,8);

?>