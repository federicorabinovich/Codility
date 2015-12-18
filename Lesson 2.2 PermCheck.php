<?php
function solution($A) {
    $sol = 1;
    $N = count($A);
    sort($A);
    for ($p = 0; $p<$N; $p++){
        if ($A[$p]!=($p+1)){
            $sol = 0;
            break;
        }
    }
    return $sol;
}
?>