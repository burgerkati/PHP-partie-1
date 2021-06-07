<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
    $adult = 18;
    // rand(); generates a random integer with paramaters from 0 to 118
    $randomAge = rand(0,118);

    if ($randomAge >= $adult) {
      echo "Vous êtes majeur(e)";
    } else  {
      echo "<h1>Vous êtes mineur(e)</h1>";
    }
    ?>
  </body>
</html>
