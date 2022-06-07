<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$checked = true;

$error = "";

if(empty($_GET["name"]) || empty($_GET['mail']) || empty($_GET['age'])){
  $checked = false;
  $error = "Dati non completi";
}elseif($_GET["name"] < 3){
  $checked = false;
  $error = "Nome non completo";
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){
  $checked = false;
  $error = "Mail non corretta";
}elseif(!is_numeric($_GET['age'])){
  $checked = false;
  $error = "Inserire un numero";
}

if($checked){
  $output = "Accesso riuscito";
}else{
  $output = "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h4>Controllo mail</h4>
  <h2><?php echo $output ?></h2>
  <?php if(!$checked): ?>
    <i><?php echo $error ?></i>
  <?php endif; ?>
</body>
</html>