<?php
  setcookie("uname",$_POST['uname'],time()+3600);/*Envoie cookie*/
  setcookie("code_psw",$_POST['psw'],time()+3600);/*Envoie cookie*/
   ?>
<?php
//exo1
  echo ($_POST["nom"])."<br>";
  echo ($_POST["prenom"])."<br>";
  echo ($_POST["age"])."<br>";
  /*echo ($_POST["dateDebut"])."<br>";
  echo ($_POST["dateFin"])."<br><br>";*/
  echo $_SERVER['SERVER_NAME']."<br>";
  echo $_SERVER['SERVER_ADDR']."<br>";
  echo $_SERVER['SERVER_SOFTWARE']."<br>";

  echo "Login: ".$_COOKIE["uname"]."<br>";//reception du cookie
  echo "Password: ".$_COOKIE["code_psw"];//reception du cookie

?>
