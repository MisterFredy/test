
<?php

 $length = 15;
 $check = true;

 for($i=1; $i<=$length; $i++){
    echo "@";
    echo $i%2 == 0 ? "&nbsp;":null;
    for($j=1; $j<$length-2; $j++){
        if($i%2 == 0){
          echo  "&nbsp;";
          if($j == $length-3){
              echo "@";
          }
        }else{  
          if($j==1 && $check){
            echo "&nbsp;";
            $check = false;
          }else if($j == $length-4 && $check == false){
            echo "@";
            $check = true;
          }
          else{
            echo "@";
          }
        }
    }
    echo "<br>";
 }
?>


