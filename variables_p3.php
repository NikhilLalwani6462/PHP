<?php
$num1 = 50;
$num2 = 14;
    function addNum($num1,$num2){
        $add = $num1 + $num2;
        return $add;
    }
    function multiplyNum($num1,$num2){
        $multiply = $num1 * $num2;
        return $multiply;

    }
    function divideNum($num1,$num2){
        $divide = $num1/$num2;
        return $divide;

    }
$add = addNum($num1,$num2);
$multiply = multiplyNum($num1,$num2);
$divide = divideNum($num1,$num2);
echo "Addition is :" . $add . "<br>";
echo "\nMultiplication is :" . $multiply . "<br>";
echo "\nDivision is :" . $divide . "<br>";
?>