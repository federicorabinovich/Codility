<?php
function solution($A) {
    sort($A);
    $N = count($A);
    for ($p = 1; $p <= $N; $p++){
        if($A[$p-1]!=$p){
            return $p;
            break;
        }
    }
    return $N+1;
}
?>