<?php 
$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "h7r4vpl2b3njcsduikgme5tqoxyw9za801f6";

$message = "Lets meet today at 5 pm in boomers.";
$message = strtolower($message);
$output = '';

for($i=0;$i<strlen($message);$i++){
    $character = $message[$i];
    $position = strpos($original,$character);
    if($position!==false){
        $replacement = $key[$position];
    }else{
        $replacement = $character;
    }
    
    $output = $output . $replacement;
}
echo $output;