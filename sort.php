<?php

$names=$_POST["names"];
$heights=$_POST["heights"];


$sorted=height_sort($names,$heights);

foreach ($sorted as $s){
    echo " ".$s." ";
}

function height_sort($names,$heights){
    $name_arr = explode(",",$names);
    $height_arr = explode(",",$heights);

    $temp = [];
    for ($i=0; $i < sizeof($name_arr); $i++) {
        $temp[$height_arr[$i]] =$name_arr[$i];
    }
    krsort($temp);
    return $temp;

}

?>