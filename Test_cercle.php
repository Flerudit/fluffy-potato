<?php>
    require_once('Cercle.php');
    $cercle =new Cercle(5);
    echo "Rayon du cercle:".cercle->getRayon()."<br>";
    echo "Surface du cercle:".cercle->surface()."<br>";
    echo "Perimetre du cercle:".cercle->perimetre()."<br>";
    $cercle->setRayon(7);
    echo "Nouveau rayon du cercle:".cercle->getRayon()."<br>";
    echo "Nouvelle surface du cercle:".cercle->surface()."<br>";
    echo "Nouvelle perimetre du cercle:".cercle->perimetre()."<br>";
</?>