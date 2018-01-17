<?php

require 'autoload.php';


$config=parse_ini_file('Config.ini');

$username =$config['username'];
$password =$config['password'];
$host = $config['host'];
$port=$config['port'];
$charset = $config['charset'];
$db =$config['db'];

$dsm ="mysql:host=$host;dbname=$db;port=$port;charset=$charset";

$connexion = new PDO($dsm, $username, $password);

$dao=new personnageDAO();
$dao->setPdo($connexion);



$result=$dao->  getpersonnageAll();

$nom=$result[0]->getName();

var_dump (count($result));

$compteur = 0;

for ($i=1;$i<(count($result))+1;$i++){
    
     ($result[$compteur]->getName());
    
    $compteur ++;
}



/**

$personnage = new personnage;
$personnage -> setDegat(10);
$personnage -> setName('titi');
$personnage -> setExp(2);
$personnage -> setLoc('popopo');
$personnage -> setForce_perso(30);
$personnage -> setId(4);


$dao->updatepersonnagebyId($personnage);

**/

/**
$personnage=new personnage();
$personnage ->setName("toto");
$personnage ->setForce_perso(50);
$personnage ->setExp(0);
$personnage ->setLoc("Istres");
$personnage ->setDegat(0);
*/
/**$dao -> deletePersonnageByName("toto");*/


/*$result =$dao->getpersonnageexist("toto");

/**
if (empty($result)){
    echo "le perso n'existe pas " ;   
}
    else {
$compteur = 0;
for  ($i=1;$i<3;$i++){
    
    echo ($result[$compteur]->getName());
    echo ($result[$compteur]->getloc());
    echo ($result[$compteur]->getexp());
    echo ($result[$compteur]->getDegat());
    
    
    $compteur ++;
}}

        
*/

    


/**
$result =  $dao->getpersonnageAll();
var_dump($result);
$compteur = 0;
for  ($i=1;$i<3;$i++){
    
    echo ($result[$compteur]->getName());
    echo ($result[$compteur]->getloc());
    echo ($result[$compteur]->getexp());
    echo ($result[$compteur]->getDegat());
    
    
    $compteur ++;

}


/*$dao->addPersonnage($personnage);*/


?>