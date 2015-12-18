<?php
function solution($X, $A) {
    $sol = -1;
    $N = count($A);
    $LEAVES = array();
    for ($p=1; $p<=$X; $p++){
        $LEAVES[$p]=true;
    }
    for ($p=0; $p<$N; $p++){
        unset($LEAVES[$A[$p]]);
        if(count($LEAVES)==0){
            $sol = $p;
            break;
        }
    }
    return $sol;
}
?>