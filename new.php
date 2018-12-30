<?php

$n = 7;

for( $n = 7; $n > 0; $n--){

  $s = $n / 2;
  $t = $n - ($s*2);

  for( $j = $s; $j > 0; $j-- ){
    echo " ";
  }
  for($i = $t; $i > 0 ; $i--){
    echo "*";
    
  }
}