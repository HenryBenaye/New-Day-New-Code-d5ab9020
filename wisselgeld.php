<?php

$change = round((float)$argv[1]);
define("GELDEENHEDEN", [50 , 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05]);


foreach(GELDEENHEDEN as $munt){
    $munt = (float)$munt;
    if(round($change / $munt, 1 ) > 1){
        $times = floor($change / $munt);
        echo "$times X $munt" . PHP_EOL;
        $change = $change - ($times * $munt);

    }
}
