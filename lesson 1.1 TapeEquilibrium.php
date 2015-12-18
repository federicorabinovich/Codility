<?php
function solution($A) {
    $sol =2000;
    $N = count($A);
    $sum = 0;
    $SUM = array();
    for($p=0; $p<$N; $p++){
        $sum +=$A[$p];
        $SUM[$p]=$sum;
    }
    for($p=1; $p<$N; $p++){
        $aux = abs(2*$SUM[$p-1]-$SUM[$N-1]);
        if ($aux< $sol) $sol = $aux;
    }
    return $sol;
}
?>