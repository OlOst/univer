<?php
/**
 * Created by PhpStorm.
 * User: cayneir
 * Date: 8/13/15
 * Time: 10:51 PM
 */
function geometricProgresion($number, $denominator, $count){
    $i=0;
    echo "Geometric progression:"."<br>";
    do{
        echo "number ".++$i.": ".$number." ";
        $number*=$denominator;
    }while($i<$count);
}
geometricProgresion(2,3,7);