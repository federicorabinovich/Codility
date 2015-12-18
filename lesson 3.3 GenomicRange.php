<?php
function solution($S, $P, $Q) {
   $M = count($P);
   $return = array();
   for($i=0; $i<$M; $i++){
        $aux = substr($S, $P[$i], $Q[$i]-$P[$i]+1);
        if(strpos($aux, "A")!==false) $return[$i]=1;
        elseif(strpos($aux, "C")!==false) $return[$i]=2;
        elseif(strpos($aux, "G")!==false) $return[$i]=3;
        else $return[$i]=4;
   }
   return $return;
}
?>
