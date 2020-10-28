<h1>PHP - Initiation</h1>

<h2>Variable : </h2>
<?php
// Je souhaite afficher ceci dans une variable : 
// ---------------------------------------------
// Société
// Adresse + adresse_complement
// CP Ville

// Initialisation :
$societe = "Excelia";
$adresse = "102 rue de Coureilles";
$adresse_complement = "Les Minimes";
$ville = "La Rochelle Cedex 1";
$cp = 17024;

echo "<h3>Méthode 01 : </h3>";
echo $societe."<br> \"test\" ";
echo $adresse . " - " . $adresse_complement . "<br>";
echo $cp . " " . $ville;
echo "<hr>";

echo "<h3>Méthode 02 : </h3>
".$societe."<br>
".$adresse . " - " . $adresse_complement . "<br>
".$cp . " " . $ville;
echo "<hr>";

echo "<h3>Méthode 03 : </h3>";
echo "$societe<br>$adresse - $adresse_complement<br>$cp $ville<hr>";
?>




<h2>Tableau :</h2>
<?php
// Je souhaite afficher ceci dans un tableau : 
// -------------------------------------------
// Société
// Adresse + adresse_complement
// CP Ville

// Initialisation d'un tableau :
$monAdresse = array();

// Initialisation d'un tableau, autre syntaxe : 
// $monAdresse = [];

// Attribution des valeurs. 
// Ex: $monAdresse["key"] = "value";
$monAdresse["societe"] = "RedBull";
$monAdresse["adresse"] = "34 Av. Albert Denis";
$monAdresse["cp"] = 33000;
$monAdresse["ville"] = "BORDEAUX";

echo "<h3>Méthode 01 (tableau) : </h3>";
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




// Je souhaite afficher l'ensemble du tableau : 
// -------------------------------------------
// key / value
// clef / valeur

// Initialisation
$age = array(
  "pierre"  => 25,
  "sophie"  => 24,
  "michael" => 23
);

echo "<h3>Boucle foreach :</h3>";
foreach ($age as $keyFirstname => $valueAge) {
  echo $keyFirstname." a ".$valueAge." ans<br>";

  // Autre syntaxe : 
  //echo "$keyFirstname a $valueAge ans<br>";
}
echo "<hr>";
?>




<h2>Conditions :</h2>
<?php
$note = 15;
echo "Ma note : ".$note."<br>";

// Condition : if, elseif, else
if ($note >= 10) {
  echo "vous avez la moyenne";
} elseif ($note < 10 ) {
  echo "vous n'avez pas la moyenne";
}
echo "<br>";

// Condition : switch
switch ($note) {
  case 0 :
  case 1 :
  case 2 :
  case 3 :
  case 4 :
  case 5 :
  case 6 :
  case 7 :
  case 8 :
  case 9 :
    echo "Vous avez moins que la moyenne.";
    break;
    
  case 10 :
    echo "vous avez juste la moyenne.";
    break;
    
  case 11 :
  case 12 :
  case 13 :
  case 14 :
  case 15 :
  case 16 :
  case 17 :
  case 18 :
  case 19 :
  case 20 :
    echo "Vous avez plus que la moyenne.";
    break;
    
  default :
    echo "Note inconnue.";
}
echo "<br>";

// Condition : ternaire
echo ($note == 0) ? "Vous avez eu 0" : "Vous avez une note supérieure à 0";
echo "<hr>";
?>




<?php
/*

<h2>Debug :</h2>
<?php
// DEBUG :
// -------
// Pour visualiser le contenu du tableau (debug uniquement).

echo "<pre>";
  var_dump($monAdresse);
echo "</pre>";
?>