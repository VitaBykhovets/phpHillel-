<?php

//$color = 1;
//
//if($color === 1){
//    echo 'Green' . PHP_EOL;
//}elseif ($color === 2){
//    echo 'Red' . PHP_EOL;
//}elseif ($color === 3){
//    echo 'Blue' . PHP_EOL;
//} elseif ($color === 4){
//    echo 'Brown' . PHP_EOL;
//} elseif ($color === 5){
//    echo 'Violet' . PHP_EOL;
//} elseif ($color === 6){
//    echo 'Black' . PHP_EOL;
//} else {
//    echo 'White' . PHP_EOL;
//}

$color = 1;

$result = match ($color){
    1 => 'Green' . PHP_EOL,
    2 => 'Red' . PHP_EOL,
    3 => 'Blue' . PHP_EOL,
    4 => 'Brown' . PHP_EOL,
    5 => 'Violet' . PHP_EOL,
    6 => 'Black' . PHP_EOL,
    default => 'White' . PHP_EOL,
};

echo $result;