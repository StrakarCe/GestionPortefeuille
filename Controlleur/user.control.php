<?php
include("../Modele/ajout.modele.php");
if(isset($_POST['transition'])){
  switch($_POST['transition']){
    case "userAdd":
      if(isset($_POST['data'])){
        ajout_utilisateur($_POST['data']);
      }
      break;
    case "":
      var_dump("FAIL");
      break;
    default :
      var_dump("DEFAULT");
      break;
  }
}
