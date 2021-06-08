<?php
$age = rand(0,118);
$genre = array("Schtroumpf", "Teletubbie");
$rand_keys = array_rand($genre);

echo 'Vous êtes un(e) ' . $genre[$rand_keys] . ' et vous avez ' . $age . ' ans.';
?>
