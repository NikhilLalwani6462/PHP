<?php
    $bool1 = true;
    $bool2 = true;

    function checkAnd($bool1,$bool2){
        echo $bool1 || $bool2 . "<br>";
    }
    
    function checkOr($bool1,$bool2){
        echo $bool1 && $bool2 . "<br>";

    }   
    checkAnd($bool1,$bool2);
    echo "<br>";
    checkOr($bool1,$bool2);

?>