<?php
function solution($A) {
    $N = count($A);
    $min_price = 200000;
    $max_price = 0;
    $max_profit = 0;
    for ($p = 0; $p < $N; $p++){        
        if($A[$p]<$min_price){
            if($max_price-$min_price > $max_profit) $max_profit = $max_price-$min_price;
            $min_price = $A[$p]; //buy
            $max_price = 0;
        }
        if($A[$p]>$max_price) $max_price = $A[$p]; //sell
    }
    if($max_price-$min_price > $max_profit) $max_profit = $max_price-$min_price;
    return $max_profit;
}
?>