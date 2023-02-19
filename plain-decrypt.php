<?php 

$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key= 'x2g5vr7lc0qs3m8itfeahkzwdbnjyop9146u';
$message = "lvss8 z8fs5! l8z xfv d8h?";
// $message = "Hello World~ How are you?";
$lowercase_message = strtolower($message);
$encrypted = '';
for($i=0;$i<strlen($lowercase_message);$i++){
    //echo $lowercase_message[$i];
    $key_position = strpos($key,$lowercase_message[$i]);
    if($key_position!==false){
        $replacement = $original[$key_position];
    }else{
        $replacement = $lowercase_message[$i];
    }
    $encrypted .= $replacement;
}

echo $encrypted;