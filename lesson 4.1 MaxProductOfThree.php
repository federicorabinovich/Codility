<?php
function solution($A) {
    rsort($A);
    $N = count($A);     
    return max($A[$N-1]*$A[$N-2]*$A[0], $A[0]*$A[1]*$A[2]);
}
?>