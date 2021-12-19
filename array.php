<?php
// $city = array('Dhaka','Khulna','chittagong' );
// or
$city = ['Dhaka','Khulna','chittagong'];

// print_r is only for using dispaly array!!
print_r($city);
//indexed
echo $city[1];





//AssociativeArrays
// $river = array('jomuna' => 111, 'shurma' => 222, 'meghna' => 333);
$river = ['jomuna' => 111, 'shurma' => 222, 'meghna' => 333];
echo $river['jomuna'];



//MultidimentionalArrays
$university = array(
    array("SEU", "CSE"),
    array("NSU", "BBA"),
    array("EWU", "EEE")
);
echo ": University Name: ".$university[0][0].": Program: ".$university[0][1]




?>