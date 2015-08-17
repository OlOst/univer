<?php

function geometricProgression($first,$start,$stop,$q){
    if ($stop<$start){ return;}
    print($stop.': '.$first*pow($q,$stop-1).'</br>');
    return geometricProgression($first,$start,--$stop,$q);
}
geometricProgression(2,1,13,2);
?>
