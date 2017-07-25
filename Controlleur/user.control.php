<?php
if(isset($_POST['transition'])){
  switch($_POST['transition']){
    case "userAdd":
      var_dump("superchek");
      break;
    case "":
      var_dump("FAIL");
      break;
    default :
      var_dump("DEFAULT");
      break;
  }
}
