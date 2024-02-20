<?php
    class Compte {
        private $solde;
        public function __construct($soldeInitial) {
            $this ->solde = $soldeInitial;
        }
        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($solde) {
            $this->solde = $solde;
        }
        public function deposer($montant){
            $this ->solde += $montant;
        }
        public function retirer($montant){
            if ($montant <= $this->solde){
                $this->solde -= $montant;
            } else {
                echo "Solde insuffisant. <br>";
            }
        }
        public function toString(){
            return "Votre solde est " . $this->solde . "<br>";
        }
    }
   /* $compte = new Compte(100);
    echo $compte->toString();
    $compte->deposer(50);
    echo $compte->toString();
    $compte->retirer(30);
    echo$compte->toString();
    $compte->retirer(200);
    echo $compte->toString();*/
?>
