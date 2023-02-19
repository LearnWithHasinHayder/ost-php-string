<?php 
$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "h7r4vpl2b3njcsduikgme5tqoxyw9za801f6";
// $key = "clqurdj4p5o9ei63bxwsgz7f2vmakn10tyh8";

$message = "jvmg cvvm md4ho hm a uc bs 7ddcvkg.";
$output = '';

for($i=0;$i<strlen($message);$i++){
    $character = $message[$i];
    $position = strpos($key,$character);
    if($position!==false){
        $replacement = $original[$position];
    }else{
        $replacement = $character;
    }
    
    $output = $output . $replacement;
}
echo $output;