<?php
    $r = ($_POST["annualInterest"]);
    $A ; //monhtly payment

    echo "Annual Interest Rate:" . $r . "<br>"; //year interest
    echo "Monthly Interest Rate:" .  round(($r / 12),2) . "<br>";
    $r = ( ($_POST["annualInterest"] * 0.01) / 12 ) ; //monthly interest

    $n = (12 * $_POST["numberofyears"] ); //number of months

    $p = $_POST["loanAmount"]; //loan amount
    echo "Loan Amount: ". $p . "<br>";


    $A = ($p * $r * (1 + $r)**$n) / ((1 + $r)**$n - 1);
    echo "Monthly Payment:".round( $A , 2). "<br>";
    echo "Total Payment:" . round(($A * $n),2)  . "<br>";
?>