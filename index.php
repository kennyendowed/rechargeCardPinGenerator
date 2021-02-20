<?php
function randomNumber($length) {
    $result = '';
    for($i = 0; $i < $length; $i++) {
$num = str_pad(mt_rand(1,9999),4,'0',STR_PAD_LEFT);
$result .=$num."-".mt_rand(1000,9999)."-".mt_rand(1000,9999)
."<br/>";
     //   $result .= mt_rand(100000000,999999999)."<br/>";

   }
    return $result;
}

echo randomNumber(199). "<br>";
?>