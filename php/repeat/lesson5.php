<?php
for($a = 1 ; $a <= 9  ; $a ++){
    for($b = 8 ; $b >= $a ; $b --){
        echo "*";
      }
      for($c = 1 ; $c <=$a ; $c++){
        echo $c;
      }
      for($d = 3 ; $d >=6-$c ; $d--){
        echo $d-(4-$a);
      }
      echo "<br>";
  }
  ?>