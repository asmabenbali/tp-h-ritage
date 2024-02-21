<?php
/*claase fille1*/ 

class Formateur extends Personne { /*extends pour heriter de classe personne*/
    private $salaireFixe;

    public function __construct($numero, $nom, $prenom, $heursup, $salairehoraire, $salaireFixe, $diplome) {
        /* utilise parent pour heriter de classe personne*/
        parent::__construct($numero, $nom, $prenom, $heursup, $salairehoraire, $diplome);
        $this->salaireFixe = $salaireFixe; 
    }

    public function calculSalaire() {
        if ($this->diplome == "1er grade") {
            $this->salairehoraire = 120;
        } elseif ($this->diplome == "2eme grade") {
            $this->salairehoraire = 90;
        } elseif ($this->diplome == "3eme grade") {
            $this->salairehoraire = 60;
        } else {
            $this->salairehoraire = 40;
        }

        $salaire = $this->salaireFixe + ($this->heursup * $this->salairehoraire);
        return $salaire;
    }

    public function __toString() {
        return parent::__toString() . ", Salaire Fixe: " . $this->salaireFixe;
    }

    public function __get($attr) {
        if (property_exists($this, $attr)) {
            return $this->$attr;
        } else {
            echo "Propriété inaccessible : $attr";
        }
    }

    public function __set($attr, $value) {
        if (property_exists($this, $attr)) {
            $this->$attr = $value;
        } else {
            echo "Impossible de définir la propriété : $attr";
        }
    }
}
?>
