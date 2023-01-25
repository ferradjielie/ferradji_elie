<?php

// un commentaire sur un ligne
echo "<h1>Bienvenue</h1>";
/*
    commentaire 1
    commentaire 2
*/
echo "Tout va bien";
$var1 = "ferradji elie";
echo "<br>salut $var1 et soit le bienvenue <br>";
echo 'hey '. $var1 . ' ca va ?' ; 

echo "1";
$cara = "Notre formation DL commence aujourd'hui";
 echo "<br>";  echo strlen ($cara); 

echo "<br>";

echo "2";
echo "<br>";

echo "<br>";
$mots = "Notre formation DL commence aujourd'hui" ;
echo str_word_count ($mots);

echo "<br>";

echo "3";


$phrase1 = "Notre formation DL commence aujourd'hui";
echo $phrase1;
echo "<br>" ;
echo str_replace ("aujourd'hui", "demain", $phrase1);
echo "<br>";
echo "<br>";



echo "<br>";
echo "<br>";
echo "<br>";

echo "4" ;

$phrase = 'Engage le jeu que je le gagne';
$inverse = strtolower(strrev($phrase));
if (strtolower($phrase) === $inverse) {
    echo $phrase . ' est palindrome';
} else {
    echo $phrase . ' n\'est pas palindrome ';
}
 
 echo "<br>";
echo "<br>";
echo "exercice 5";

$franc = 150;
$conv = 6.55957;
$euro = round($franc/$conv, 2) ;
echo $euro;

echo "<br>";
echo "<br>";

echo "excercice 6";

$prixuni = 5.99 *1.20;
$quantite = 8;
$taux = 1.20;
 $montantfacture = $prixuni * $quantite ;
 echo $montantfacture;

 echo "<br>";
echo "<br>";

$age = 10;
if ($age==6 || $age== 7 )
{echo "enfant appartient à la catégorie Poussin";}
elseif ( $age == 8 || $age==9)
{echo "enfant appartient à la catégorie Pupille";}
elseif ($age==10 || $age==11)
{echo "enfant appartient à la catégorie Minime ";}
elseif ($age>=12)
{echo "enfant appartient à la catégotie Cadet"; }
else {echo "enfant appartient à aucune catégorie";}
 
/*strrev
strtolower
*/



echo "<br>" ;
echo "<br>" ;

echo "exercice 8" ;

$nb =1 ;
 $nb2= 8;
 for ($s=1; $s<= 8; $s++)
 {$nb= $nb2 * $s;
 echo $s. 'x'. $nb2. '='. $nb . "<br>";}
 echo "<br>" ; 
 
 
 $number=1 ;
 $nbr2 = 8;
 $mul = 0;


 while ($mul <= 8 )

{  $number= $mul* $nbr2; echo $mul. "x". $nbr2. "=". $number. "<br>"; $mul++;}




echo " exercice 9";

$age = 19;
$sexe = "h";
if ($age >= 18 && $age <=35 && $sexe == "f" )
{ echo "la personne est imposable";}
elseif ($age >= 20 && $sexe == "h")
{echo "la personne est imposable";} 
else {echo "la personne est non imposable";}

 echo "<br>" ;
 echo "<br>" ;

 echo "exercice 12" ;

echo "<br>";


$tableau = [
    "Micka" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($tableau);  // k = key -> trier de A à Z selon la clé (ici le prénom)
krsort($tableau); // r = reverse
asort($tableau);  // trier le tableau selon la valeur (ici la langue)
arsort($tableau); 

// parcourir le tableau qui associe le prénom et la langue
foreach($tableau as $prenom => $langue) {
    // on vérifie la langue rencontrée
    // en fonction de la langue rencontrée, on affichera la bonne salutation (Salut, Hola ou Hello) + prénom
    // si la langue est FRA -> "Salut + prénom", si la langue est ESP -> "Hola + prénom" sinon "Hello + prénom"
    if($langue == "FRA") {
        echo "Salut " . $prenom."<br>";
    } elseif ($langue == "ESP") {
        echo "Hola " . $prenom."<br>";
    } else {
        echo "Hello " . $prenom . "<br>";
    }
}
echo '<br>';
echo "exercice 10";
echo '<br>';


$mt = 152;
$mv = 200;
$reste = $mv - $mt;
//echo "Reste : $reste €";
// division entière
// reste = 48 --> 4 billets de 10 (40)
// reste = 48 - 40 --> 8

 $billets10 = intdiv ($reste, 10); // 48 / 10 = 4.8 -> 4
 $reste = $reste - $billets10 * 10; // 48 - 4 * 10 = 8
 $billets5 = intdiv($reste, 5); // 8 / 5 = 1.6 -> 1
 $pièce2 = 2/1 ;
 $piece1 = 1 * 1;

 echo $billets10 . "billets de 10" .  $billets5 .  " billet de 5" .  $pièce2 . " pièce de 2". $piece1 ."pièce de 1" ;



//echo floor() 








echo "<br>";
echo"<br>";
echo "<br>";

echo "exercice 11";
echo "<br>";


$voitures = ['Peugeot',
'Renault',
'BMW',
'Mercedes'];



foreach ($voitures as $marques)
    echo $marques. "<br>" ;

echo "<br>";
echo "<br>";

echo "exercice 13";
echo "<br>";


  
$notes = [12, 5, 8, 16, 11, 14, 10, 11, 18];
$somme = array_sum($notes); // additionne toutes les notes
$nbNotes = count($notes); // compte le nombre de notes
$moyenne = $somme / $nbNotes;
$resultat = round($moyenne, 2);
echo $resultat; 


$moyenne = array_sum($notes) / count($notes);
echo round($moyenne, 2);

//echo round(array_sum($notes) / count($notes), 2);
echo "<br>";
echo "<br>";

echo "exercice 14"; echo "<br>";

$dateDeNaissance = new DateTime("1999-09-14");
$today = new DateTime();
$dateDiff = date_diff($dateDeNaissance, $today);
echo 'votre âge est de ' . $dateDiff->format('%y ans %m mois %d jours')."<br>";




$datenaissance = date_create("14-09-1999");
$datetoday = date_create("now");
$diff = date_diff ($datenaissance, $datetoday);
echo 'votre âge est de ' . $diff->format('%y')."<br>";


class Personne {
    private string $_nom; // $_nom est equivalent à une variable et nom est equivaut à sa valeur
    private string $_prenom;
    private string $_ville;

    public function __construct(string $nom, string $prenom, string $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
    }

    // getters (accesseurs)
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function getVille() {
        return $this->_ville."<br>";
    }

    // setters (mutateurs)
    public function setNom($nouveauNom) {
        $this->_nom = $nouveauNom;
    }
    public function setPrenom($nouveauPrenom) {
        $this->_prenom = $nouveauPrenom;
    }

    public function setVille($nouvelleVille){
        $this->_ville = $nouvelleVille;
    }

    public function __toString(){
        return $this->_prenom . " " . $this->_nom . " habite à " . $this->_ville."<br>";
    }
} // fin classe Personne

$p1 = new Personne("FERRADJI", "Elie", "STRASBOURG");
$p2 = new Personne("MURMANN", "Mickael", "STRASBOURG");
$p3 = new Personne("DUPONT", "Marie", "PARIS");

// avant mariage
echo $p3;
$p3->setNom("SCHMITT");
$p3->setVille("STRASBOURG");
// après mariage
echo $p3;

echo '<br>';
echo '<br>';
echo '<br>';

class Sandwitch {

    private string $_sand;
    private string $_sauce;
    private string $_crudité;

    public function __construct (string $sand, string $sauce, string $crudité) {
        $this->_sand = $sand;
        $this->_sauce = $sauce;
        $this->_crudité = $crudité;
    }
    public function getSand () {
        return $this->_sand; 
    }
    public function getSauce () { 
        return $this->_sauce; 
    }
    public function getCrud () {
        return $this->_crudité; 
    }
    public function __toString () {
        return $this->_sand ." sauce " . $this->_sauce ." ". $this->_crudité;
    }
}

$s1= new Sandwitch('Sandwitch', 'mayonnaise', 'poivron');
$s2= new Sandwitch('Sandwitch', 'moutarde', 'carotte');
echo $s1;
echo "<br>";
echo $s2;
    

















?>