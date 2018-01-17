<?php
require ('autoload.php');

$nomDuPerso =$_POST['name'];
$perso1 =new personnage($nomDuPerso);
$perso1 ->parler();
$perso2 =new personnage("picsou");
$perso2 ->parler();
$perso1 ->frapper($perso2);
$perso1 ->parler();
$perso2 ->parler();

?>