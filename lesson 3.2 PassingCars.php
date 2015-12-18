<?php
function solution($A) {
    $N = count($A);
    $ONES = array();
    $ones = 0;
    $sol = 0;
    for ($p = 0; $p < $N; $p++){
        if ($A[$p]==1){
            $ones++;
        }
        $ONES[$p]=$ones;
    }
    for ($p = 0; $p < $N; $p++){
        if ($A[$p]==0) $sol+=($ones - $ONES[$p]);
        if ($sol>1000000000) return -1;
    }
    return $sol;    
}
?>

