<?php
function secondSmall($arr) {
    $uniqueArr = array_unique($arr);
    
    sort($uniqueArr);
    
    if (count($uniqueArr) < 2) {
        return null; 
    }
    
    return $uniqueArr[1];
}

$inputArray = [8, 3, 19, 26, 12, 1, 65, 14];
$return = secondSmall($inputArray);
echo $return;
?>