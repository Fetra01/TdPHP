<?php
  //Exo1
  $mois  = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
  var_dump($mois);//afficher le tableaux
  //Exo2
  //echo $mois[2];

  //Exo3
  //echo "<br>$mois[5]";

  //Exo4
  /*$mois[7]="août";
  var_dump($mois);//afficher le tableaux avec taille du tableaux et taille des string
  print_r($mois);//afficher le tableaux avec sa place dans le tableaux*/

  //Exo5
  $haut_de_france  = array(02=>"Aisne" ,59 => "Nord", 69 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme" );
  var_dump($haut_de_france);

  //Exo6
  echo $haut_de_france[59];

  //Exo7
  $haut_de_france[51]="Reims";
  var_dump($haut_de_france);

  //Exo8
  $taille = sizeof($mois);//savoir taille du tableaux!!

    for($i=0; $i<$taille;$i++){
      echo "$i = $mois[$i]<br>";
    }//version 1
    foreach ($mois as $key => $value) {
      echo "$key". ": "."$value<br>";
    }//version 2

  //Exo9
  foreach ($haut_de_france as $key => $value) {
    echo "$key". ": "."$value<br>";
  }


  //Exo10
  foreach ($haut_de_france as $key => $value) {
    echo "Le departement "." $value "." a le numéro "." $key<br>";
  }


?>
