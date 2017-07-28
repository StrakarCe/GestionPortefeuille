<?php
function connexion($dataConnexion){
  try {
      $pdo = new PDO('mysql:host=' . $adr . ';dbname=' . $bdd, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
      foreach($pdo->query('SELECT * from FOO') as $row) {
          print_r($row);
      }
      $dbh = null;
  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
  return $pdo;
}

function ajoutUtilisateur(){

}
function suppressionUtilisateur(){

}
