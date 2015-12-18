<?php
// you can use print for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $N = count($A);
    $C = array();
    for ($p = 0; $p<$N; $p++){
        if (!isset($C[$A[$p]])) $C[$A[$p]] = 1;
        else $C[$A[$p]]++;
        if ($C[$A[$p]]>($N/2)){
            return $p;
            break;
        }
    }
    return -1;
}
?>