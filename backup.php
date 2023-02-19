<?php 
$string = "hello@world.com";
$needle = 'wor';
$is_w_present = strpos($string,$needle); 
if($is_w_present!==false){
    echo "{$needle} is present at {$is_w_present}";
}else{
    echo "{$needle} is not present";
}

$fruits = 'Mango Banana Apple Orange Grape';
$fruits_array = explode(' ',$fruits);
$fruits_again = implode('_',$fruits_array);
echo $fruits_again;
