<?php
function solution($N) {
    $count_factors = 2;
    for ($p = 2; $p <= floor(sqrt($N)); $p++){
        if ($N%$p==0){
            if ($p==sqrt($N)) $count_factors +=1;
            else $count_factors +=2;
        }
    }
    if ($N==1) return 1;
    return $count_factors;
}
?>