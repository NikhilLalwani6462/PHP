<?php
$nu = [1,2,3,4,5,6,6,7];

for($i=0;$i<=sizeof($nu);$i++){
    if($nu[$i]==5){
        continue;
    }
    elseif($nu[$i]==6){
        continue;
    }
    else{
        echo $nu[$i];
    }
}