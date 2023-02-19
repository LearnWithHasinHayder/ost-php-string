<?php 
$original = 'abc!@#$%^&defghijklmnopqrstuvwxyz1234567890';
$pwd_length = 10;
$output = '';
for($i=0;$i<$pwd_length;$i++){
    $random = mt_rand(0,35);
    $character = $original[$random];
    $output .= $character;
}

echo $output;