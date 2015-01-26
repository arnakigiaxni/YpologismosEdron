<?php
    error_reporting(0);
    
    //$pk = $pev = $apev = $edres = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pk = $_POST["pk"];
        $pev = $_POST["pev"];

        $edres = ($pk*250)/(100-$pev);
    }
?>
