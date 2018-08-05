<?php 
    $json = file_get_contents('../../data/team-data.json');
    $tempArray = json_decode($json);
    unset($tempArray[$_POST['id']]); 
    $shiftedArray = array_values($tempArray);
    $newArray = json_encode($shiftedArray);
    echo $newArray;
    file_put_contents('../../data/team-data.json', $newArray);
?>