<?php
    require_once('Compte.php');
    $compte = new Compte(3000);
    echo $compte->toString();
    $compte->deposer(500);
    echo $compte->toString();
    $compte->retirer(300);
    echo$compte->toString();
    $compte->retirer(200);
    echo $compte->toString();
?>