

<?php 
/*classe mère*/

class Personne {
    protected $numero;
    protected $nom;
    protected $prenom;
    protected $heursup;
    protected $salairehoraire;
    protected $diplome;

    /*METHOD CONSTRUCT*/ 

    public function __construct($numero, $nom, $prenom, $heursup, $salairehoraire, $diplome = "") {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->heursup = $heursup;
        $this->salairehoraire = $salairehoraire;
        $this->diplome = $diplome;
    }

    public function calculSalaire() {
        // JE LAIISE CETTE FUNCTION VIDE CAR IL PEUT CHANGE D'UNE CLASSE à L'AUTRE
    }

    //FUNCTION TOSTRING POUR AFFICHER LE MESSAGE

    public function __toString() {
        return "Numéro: " . $this->numero . ", Nom: " . $this->nom . ", Prénom: " . $this->prenom;
    }

    //GET AND SET AVEC UNE MANIER PLUS FACTORISER ET GENERER 

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
