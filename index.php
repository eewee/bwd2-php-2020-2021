<?php
$societe = "Excelia";
$adresse = "102 rue de Coureilles";
$adresse_complement = "Les Minimes";
$ville = "La Rochelle Cedex 1";
$cp = 17024;

// Je souhaite afficher ceci dans une variable : 
// ---------------------------------------------
// Société
// Adresse + adresse_complement
// CP Ville

echo "<h2>Méthode 01 : </h2>";
echo $societe."<br> \"test\" ";
echo $adresse . " - " . $adresse_complement . "<br>";
echo $cp . " " . $ville;
echo "<hr>";

echo "<h2>Méthode 02 : </h2>
".$societe."<br>
".$adresse . " - " . $adresse_complement . "<br>
".$cp . " " . $ville;
echo "<hr>";

echo "<h2>Méthode 03 : </h2>";
echo "$societe<br>$adresse - $adresse_complement<br>$cp $ville<hr>";

// Je souhaite afficher ceci dans un tableau : 
// -------------------------------------------
// Société
// Adresse + adresse_complement
// CP Ville

// init
$monAdresse = array();

// Init autre syntaxe : 
// $monAdresse = [];

$monAdresse["societe"] = "RedBull";
$monAdresse["adresse"] = "34 Av. Albert Denis";
$monAdresse["cp"] = 33000;
$monAdresse["ville"] = "BORDEAUX";

echo "<h2>Méthode 01 (tableau) : </h2>";
echo "
Societe : ".$monAdresse['societe']."<br>
Adresse : <br>
<ul>
  <li>
    ".$monAdresse['adresse']."
  </li>
    <li>
    ".$monAdresse['cp']."
  </li>
    <li>
        ".$monAdresse['ville']."
  </li>
</ul>";




// Init
$age = array(
  "pierre"  => 25,
  "sophie"  => 24,
  "michael" => 23
);

// Afficher l'age de Sophie : 
echo $age["sophie"]."<br><br>";

// Faire une boucle :
foreach ($age as $keyFirstname => $valueAge) {
  echo $keyFirstname." a ".$valueAge." ans<br>";

  // Autre syntaxe : 
  //echo "$keyFirstname a $valueAge ans<br>";
}
echo "<hr>";

// Pour visualiser le contenu du tableau (debug uniquement) : 
echo "<pre>";
  var_dump($monAdresse);
echo "</pre>";
?>