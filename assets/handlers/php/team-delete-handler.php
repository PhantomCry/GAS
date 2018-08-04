<?php 
    $json = file_get_contents('../../data/team-data.json');
    $tempArray = json_decode($json);
    unset($tempArray[$_POST['id']]); 
    $newArray = json_encode($tempArray);
    echo var_dump($newArray);
    file_put_contents('../../data/team-data.json', $newArray);
?>