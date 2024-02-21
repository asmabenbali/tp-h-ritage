<?php
// Include class definitions
require_once "Personne.php";
require_once "Formateur.php";
require_once "Vacataire.php";

// Creating an instance of Personne
$personne = new Personne("100", "BEN-BALI", "ASSMA", 5, 10, "Stagiaire");
echo "Personne: " . $personne . "\n";
echo "Salaire de la personne: " . $personne->calculSalaire() . "DH\n";


echo "<br>";
echo "<br>";
echo "<br>";


// Creating an instance of Formateur
$formateur = new Formateur("200", "MARYAM", "AIT ALI", 10, 20, 1000, "licence");
echo "Formateur: " . $formateur . "\n";
echo "Salaire du formateur: " . $formateur->calculSalaire() . "DH\n";


echo "<br>";
echo "<br>";
echo "<br>";

// Creating an instance of Vacataire
$vacataire = new Vacataire("300", "HICHAM", "AHMADY", 8, 20, "DOCTORAT");
echo "Vacataire: " . $vacataire . "\n";
echo "Salaire du vacataire: " . $vacataire->calculSalaire() . "DH\n";
?>
