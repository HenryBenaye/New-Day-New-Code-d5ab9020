<?php

$change = (int)$argv[1];
define("GELDEENHEDEN", [50, 20, 10, 5, 2, 1]);



foreach(GELDEENHEDEN as $munt){
    if(floor($change / $munt) > 0){
        $times =  floor($change / $munt);
        echo "$times * $munt" . PHP_EOL;
        $change = $change - ($times * $munt);

    }
}
