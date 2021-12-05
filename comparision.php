<?php
    $a = 10;
    $b = '10';
//equal equal
    if($a==$b){
        echo"a & b similar";
    }else{
        echo "NOT";
    }
    echo "<br>";
    //idendical
    if($a===$b){
        echo"a & b similar";
    }else{
        echo "NOT";
    }
    //not equal
    echo "<br>";
    if($a!=$b){
        echo"a & b are similar";
    }else{
        echo "a & b are not simmilar";
    }
    //greater than
    echo "<br>";
    if($a > $b){
        echo"a is grater than b ";
    }else{
        echo "NOT";
    }
    //less than
    echo "<br>";
    if($a < $b){
        echo"a is less than b";
    }else{
        echo "NOT";
    }
    //greater than or equal to
    echo "<br>";
    if($a >= $b){
        echo"a is greater than or equal to b";
    }else{
        echo "NOT";
    }
    //less than or equal to
    echo "<br>";
    if($a <= $b){
        echo"a is less than or equal to b";
    }else{
        echo"NOT";
    }
?>