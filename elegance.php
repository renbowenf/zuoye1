<?php
    $b=0;
    function a($b){ 
}
    for($x=-5;$x<=5;$x++){
        for($y=-5;$y<=5;$y++){
            if(($x*$x)+($y*$y)==25){ 
            $b=$b++;            
        }
    }
}
print a($b);
?>