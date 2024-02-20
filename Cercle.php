<?php

class Cercle {
    private $rayon;
    public function __construct($r){
        $this->rayon =$r;

    }
    public function getRayon(){
        return $this->rayon;

    } public function setRayon($s){
        $this->rayon=$s;

    }
    public function surface(){
        return M_PI* pow($this->rayon,2);

    }
    public function perimetre(){
        return 2*M_PI *$this->rayon;
    }
    
    
}
$cercle =new Cercle(5);
echo "Rayon du cercle:".$cercle->getRayon()."<br>";
echo "Surface du cercle:".$cercle->surface()."<br>";
echo "Perimetre du cercle:".$cercle->perimetre()."<br>";

$cercle -> setRayon(7);
echo "Nouveau rayon du cercle:".$cercle->getRayon()."<br>";
echo "Nouvelle surface du cercle:".$cercle->surface()."<br>";
echo "Nouveau perimetre du cercle:".$cercle->perimetre();
?>