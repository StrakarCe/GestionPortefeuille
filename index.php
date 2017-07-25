<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Gestion de comptes bancaires</title>
  <?php include 'includes.php'; ?>
</head>

<body>
  <?php
  if(isset($_GET['title'])){
    $title = $_GET['title'];
    switch($title){
      case "accueil":
        appel_vue($title);

        break;
      case "user":
        appel_vue($title);
        break;
    }
  }else{
    appel_vue("accueil");
  }


  ?>

  </body>
</html>
