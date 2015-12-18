<?php
function solution($S) {
    $N = strlen($S);
    $A = array();
    for ($p = 0; $p < $N; $p++){
        if (end($A)=='(' && $S[$p]==')' || end($A)=='[' && $S[$p]==']' || end($A)=='{' && $S[$p]=='}') {
            if (count($A)==0){
                return 0;
                break;
            }else{
                array_pop($A);
            }
        }
        else array_push($A, $S[$p]);        
    }
    if (count($A)!=0) return 0;
    else return 1;
    
}
?>