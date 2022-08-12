<?php
    $a =$_POST['ul'];
    $b ="adm";
    $c =$_POST['passl'];
    $d ="132";

    if (($a == $b) and ($c == $d)){
        header ("Location: sistema.html");
    }else {
       echo "Erro";
    };
        
?>