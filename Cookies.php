<?php
date_default_timezone_set('Europe/Madrid');
$fecha=date("d/m/Y H:i:s");

if(isset($_COOKIE["visita"])){
    $visita = $_COOKIE["visita"] + 1;
    setcookie('visita', $visita, time()+3600);
    print "<h2>Hola de nou, és la visita número: " . $visita . ".</h2>";
    print "<h2>La data actual de l'última visita és: ". $fecha . ".</h2>";
    
}else{
    $visita=1;
    setcookie('visita', $visita, time()+3600);
    print "<h2> Hola, aquesta és la primera vegada que entres en aquesta pàgina. </h2>";
    
    
}
?>