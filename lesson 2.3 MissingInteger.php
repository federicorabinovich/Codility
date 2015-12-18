<?php
function solution($A) {
    sort($A);
    $N = count($A);
    $sol = 1;
    $bol_break =false;
    if($N==1 && $A[0]==1) return 2;
    if(!in_array(1, $A)) return 1;
    else{
        for ($p=0; $p<$N-1; $p++){
            if($A[$p]>0){
                if($A[$p]<$A[$p+1]-1){
                    $bol_break =true;
                    $sol = $A[$p]+1;
                }
                if($bol_break) break;
            }
            if($bol_break) break;
        }
        if (!$bol_break) $sol = $A[$N-1]+1;
        return $sol;
    }
}
?>