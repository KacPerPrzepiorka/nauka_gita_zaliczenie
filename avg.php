<?php

function srednia($oceny) {

    $suma = array_sum($oceny);

    return $suma / count($oceny);

}

?>
