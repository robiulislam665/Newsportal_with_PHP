<?php
/*this method generates a 5 digit random number*/
function random_generator5() {
    $random_number = "";
    for ($i = 0; $i < 5; $i++) {
        $min = ($i == 0) ? 1 : 0;
        $random_number .= mt_rand($min, 9);
    }
    return $random_number;
}
