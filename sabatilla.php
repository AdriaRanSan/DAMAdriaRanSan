<?php 
session_start();

$sabatilla = 97;

if(!isset($_SESSION["cesta"])){
echo "No has afegit res";
}else{
echo "Total acumulat: ". $_SESSION["cesta"]+$sabatilla." euros";
$_SESSION["cesta"]+=$sabatilla;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabatilla</title>
</head>
<body>
    <h2>Llistat d'articles</h2>
    <ul>
  <li> <a href="sabatilla.php">Sabatilla Nike (97 euros)</a></li>
  <li><a href="desuadura.php">Desuadora Puma (45 euros)</a></li>
  <li><a href="pala.php">Pala de pàdel Siux Diablo Revolution (199 euros)</a></li>
  <li><a href="forro.php">Forro polar (20 euros)</a></li>
</ul>
[<a href="buidar.php">Buidar cistella</a>]

</body>
</html>