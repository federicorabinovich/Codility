<?php
function solution($S) {
    $N = strlen ($S);
    $STACK = array();
    for ($p=0; $p<$N; $p++){
        $char = substr($S, $p, 1);
        if ($char == "(") array_push($STACK, $char);
        elseif (count($STACK)) array_pop($STACK);
        else return 0;
    }
    if (count($STACK)) return 0;
    else return 1;
}
?>