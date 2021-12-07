<?php
$a = 30;
$b = 40;
$c = 50;
$d = 60;

//and
if($b > $a && $b > $c){
    echo"b is boss!!";
}elseif($a > $b && $c > $d){
    echo"a is amazing";
}else{
    echo"c is cat";
}
echo "<br>";
//or
if($d > $a || $d > $c){
    echo"d is done";
}
echo "<br>";
//not
echo !false
?>