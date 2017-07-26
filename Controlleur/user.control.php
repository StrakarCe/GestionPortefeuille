<?php
if(isset($_POST['transition'])){
  switch($_POST['transition']){
    case "userAdd":
      if(isset($_POST['login']))
      ajoutUtilisateur()
      break;
    case "":
      var_dump("FAIL");
      break;
    default :
      var_dump("DEFAULT");
      break;
  }
}
