<?php
  $today = date("H:i" , strtotime ("+1 hour"));
  $className ="morning";
  $begroeting = "Goede morgen!";
  if ($today >= "12:00" && $today < "18:00") {
    $begroeting = "Goede middag!";
    $className ="afternoon";
  }elseif ($today >= "18:00" && $today < "24:00") {
    $begroeting = "Goede avond!";
    $className ="evening";
  } elseif ($today >= "00:00" && $today < "06:00") {
    $begroeting = "Weltrusten!";
    $className ="night";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gegroet</title>
    <link rel="stylesheet" style="text/css" href="css/style.css">
    <script src="javascriptphone.js"></script>
  </head>
  <body class="<?=$className?>">
    <h1><?php echo $begroeting ?></h1>
    <h1 id="time"><?php echo $today ?></h1>
  </body>
</html>
