<?php
function solution($A) {
    sort($A);
    $N = count($A);
    for ($p  =0 ; $p< $N-2; $p++){
        if ($A[$p]+$A[$p+1]>$A[$p+2]) return 1;
    }
    return 0;
}
?>