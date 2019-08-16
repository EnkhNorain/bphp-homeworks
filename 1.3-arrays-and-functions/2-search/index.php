<?php

function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow  > $avaliableCount) {
        $result = FALSE;
    } else {
        $result = array(array());
        for ($i = 0; $i <= $rows-1; $i++) {
            for ($j = 0; $j <= $placesPerRow-1; $j++) {
                $result[$i][$j] = rand(0,1);
                //echo $i;
            }
        }
    }
return $result;
}
function reserve(&$map,$row,$place) {
    if($map[$row-1][$place-1] === FALSE) {
        $map[$row-1][$place-1] = TRUE;
        return TRUE;
    } else {
        return FALSE;
    }
}
$chairs = 50;
$map = generate(5, 8, $chairs);
$requireRow = 3;
$requiredPlace = 5;
$reverve = reserve($map, $requireRow, $requiredPlace);
logReserve($requireRow, $requiredPlace, $reverve);
$reverve = reserve($map, $requireRow, $requiredPlace);
logReserve($requireRow, $requiredPlace, $reverve);
function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}
function checkPlacesOfMap($map,$requireNearPlaces) {
    for($i=0;$i<count($map);$i++){
        $checkPos = 0;
        $row = $i+1;
        $places = ["Ряд $row"];        
        for($j=0;$j<(count($map[$i])-$requireNearPlaces + 1);$j++) {
            if($checkPos !== $requireNearPlaces) {
                if($map[$i][$j] === FALSE) {
                    $checkPos++;
                    $place = $j+1;
                    $places[] =  "Место $place"; 
                } else {
                    $checkPos = 0;
                }
            }else {
                return $places;
            }
        }     
    }
}
print_r(checkPlacesOfMap($map,2));
?>