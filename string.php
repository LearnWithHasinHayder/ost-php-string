<?php 
$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "h7r4vpl2b3njcsduikgme5tqoxyw9za801f6"; //cat = rhm
$parts = str_split($original);
shuffle($parts);
$key = join('',$parts);
echo $key;