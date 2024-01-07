<?php

//$result = 1;
//function circle(int|float $r, int|float $p = 3.14){
//  $result = ($r * $p)**2;
//  echo $result . PHP_EOL;
//}
//
//circle(2,);

//function tasktwo(int|float &$number, int|float $number2 = 2 ): void
//{
//     $number = $number ** $number2;
//}
//$number = 3;
//tasktwo( $number, 2);
//
//echo $number . PHP_EOL;

$number = 4;
function task(int|float $number, int $number2 = 2 ): int|float
{
   return $number ** $number2;
}

$newNumber = task(4);

echo $number . PHP_EOL;
echo $newNumber. PHP_EOL;
