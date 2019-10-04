<?php
//Exo1
  /*function verifié(){
    return true;
  }
  //var_dump(verifié());//affice la fonction
  $hello=verifié();
  echo "$hello";*/

  //Exo2
  /*function chaine($x){
    return $x;
  }
  $reponse=chaine("salut");
  echo "$reponse";*/

  //Exo3
  /*function chaine2($i,$x){
    return "$i "."$x";
  }
  $reponse=chaine2("bonjour","au-revoir");
  echo "$reponse";*/

  //Exo4
  /*function comparaison($i,$x){
    if($i>$x){
      return "Le premier nombre est plus grand.";
    }
    elseif ($i<$x) {
      return "Le premier nombre est plus petit.";
    }
    else {
      return "Les deux nombres sont identique.";
    }
  }
  $reponse = comparaison(2,2);
  echo "$reponse";*/

  //Exo5
  /*$i=(int)2;//pas forcer
  $x="hello";//pas forcer
  function suite($i,$x){
    return "$i ". "$x";
  }
  $reponse = suite(4,"ans");
  echo "$reponse";*/

  //Exo6
  /*function texte($nom,$prenom,$age){
    return "Bonjour ".$nom ." ".  $prenom . " ,tu as " . $age . " ans.";
  }
  $reponse = texte("Charle","daget",30);
  echo $reponse;*/

  //Exo7
  function affiche($age, $genre){
    if($age<18 && $genre == "femme"){
      return "Vous êtes une femme et vous êtes mineur";
    }
    elseif ($age>18 && $genre == "femme") {
      return "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age<18 && $genre == "homme") {
      return "Vous êtes un homme et vous êtes mineur";
    }
    else {
      return "Vous êtes un homme et vous êtes majeur";
    }
  }
  $reponse = affiche(45,"homme");
  echo $reponse;

  //Exo8
  /*function somme($i,$j,$q){
    return  "$i"+"$j"+"$q";
  }
  $reponse = somme(26,85,109);
  echo "somme = $reponse";*/
?>
