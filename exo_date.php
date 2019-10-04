<?php
  setlocale(LC_TIME, "Fr");
  //Exo1
  echo "Date aujourd'hui: ".date("d/m/Y")."<br>";

  //Exo2
  echo "Date aujourd'hui: ".date("d-m-y")."<br>";

  //Exo3
  echo "Date aujourd'hui: ".strftime("%A %d %b %Y")."<br>";

  //Exo4
  echo "Timestamp actuel : " .time()."<br>";
  echo "Timestamp du mardi 2 août 2016 à 15h00  : " .mktime(15, 0, 0, 2, 9, 2016)."<br>";//Timestamp du mardi 2 août 2016 à 15h00

  //Exo5

  $now   = time();
  $date2 = strtotime('2016-05-16 12:00:00');

  function dateDiff($now, $date2){
      $diff = abs($now - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
      $retour = array();

      $tmp = $diff;
      $retour['second'] = $tmp % 60;

      $tmp = floor( ($tmp - $retour['second']) /60 );
      $retour['minute'] = $tmp % 60;

      $tmp = floor( ($tmp - $retour['minute'])/60 );
      $retour['hour'] = $tmp % 24;

      $tmp = floor( ($tmp - $retour['hour'])  /24 );
      $retour['day'] = $tmp;

      return $retour;
  }

  // Test de la fonction
  print_r(dateDiff($now, $date2));

?>
