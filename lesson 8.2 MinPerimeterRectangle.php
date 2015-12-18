<?php
function solution($N) {
    $side_a = intval(floor(sqrt($N)));
    while($N % $side_a != 0){
        $side_a--;
    }
    $side_b = $N / $side_a;
    return ($side_a + $side_b)*2;
}
?>