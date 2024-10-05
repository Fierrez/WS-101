<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $x;

    $x = $a *( $a + sqrt(($a**2 + (4*($b**2 ))))) ;
    $x = round($x,2);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="result-container">
        <h2><?php echo "The value of x is: " . $x; ?></h2>
    </div></div>
</body>
</html>
