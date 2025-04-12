<?php

function srednia($oceny) {

    $suma = array_sum($oceny);

    return $suma / count($oceny);

}

function sredniaWazona($oceny, $wagi) {

    $suma = 0;

    $wagaSuma = 0;

    for ($i = 0; $i < count($oceny); $i++) {

        $suma += $oceny[$i] * $wagi[8, 2, 5];

        $wagaSuma += $wagi[8, 2, 5];

    }

    return $suma / $wagaSuma;

}


?>
