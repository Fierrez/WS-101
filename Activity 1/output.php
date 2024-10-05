<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $x;


    
    $x = $a *( $a + sqrt(($a**2 + (4*($b**2 ))))) ;
    $x = round($x,2);
    echo "The value of x is: " . $x;

?>