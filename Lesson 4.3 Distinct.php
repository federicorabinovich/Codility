<?php
function solution($A) {
    sort($A);
    $N = count($A);
    $sol = 0;
    if ($N>0) $sol++;
    for ($p = 1; $p < $N; $p++){
        if ($A[$p]!=$A[$p-1]) $sol++;
    }
    return $sol;
}
?>