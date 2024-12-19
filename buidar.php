<?php 
session_start();
if (($_SESSION["cesta"])!=0){
    session_destroy();
    print "Has buidat la cistella.";
    } else 
    print "No hi ha res a la cistella.";

    print "<br>";
    print "<a href='cistellaCompra.php'> Tornar a comprar. </a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buidar</title>
</head>
<body>
    
</body>
</html>