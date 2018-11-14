<?php   
    function a(){ 
    $b=0;
    for($x=-5;$x<=5;$x++){
        for($y=-5;$y<=5;$y++){
            if($x*$x+$y*$y==25){ 
            $b=$b+1;            
         }
      }
   }
print_r("$b");
}
a();
?>