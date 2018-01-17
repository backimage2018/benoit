<?php

require 'autoload.php';

$nom1 = "";
$force1="";
$loc1 ="";
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

$compteur = 0;
$nom = array();
for ($i=1;$i<(count($result))+1;$i++){
    
    $nom[] = ($result[$compteur]->getName()) ;
    $nom[] =($result[$compteur]->getDegat());
    $nom[] =($result[$compteur]->getForce_perso());
    $nom[] =($result[$compteur]->getId());
    $nom[] =($result[$compteur]->getExp());
    $nom[] =($result[$compteur]->getLoc());
    
    $compteur ++;
    }
    
    
    if (isset($_POST['Creer'])){
        $name =  $_POST['nom'];
        $force =  $_POST['force'];
        $loc = $_POST['loc'];
        $personnage = new personnage();
        $personnage ->setName($name);
        $personnage ->setForce_perso($force);
        $personnage ->setLoc($loc);
        $dao->addPersonnage($personnage);
       
    }
    
 
    if (isset($_POST['Supprimer'])){
        $name =  $_POST['nom'];
        $dao -> deletePersonnageByName($name);
               
    }
    if (isset($_POST['Modifier'])){
 
        $name =  $_POST['nom'];
        $result=$dao -> getpersonnageByName($name);
        $id1=$result[0]->getId();
        
        $personnage = new personnage;
        $personnage -> setId($id1);
        $personnage -> setName( $_POST['nom']);
        $personnage -> setLoc($_POST['loc']);
        $personnage -> setForce_perso($_POST['force']);
        
       
        $dao -> updatepersonnagebyId($personnage);
        
        $result=$dao -> getpersonnageByName($name);
        $nom1= $result[0]->getName();
        $force1= $result[0]->getForce_perso();
        $loc1= $result[0]->getLoc();
        $id1=$result[0]->getId();
        
        
    }
    if (isset($_POST['Chercher'])){
        $name =  $_POST['nom'];
        $result=$dao -> getpersonnageByName($name);
       $nom1= $result[0]->getName();
       $force1= $result[0]->getForce_perso();
       $loc1= $result[0]->getLoc();
       $id1=$result[0]->getId();
     
       
        
               
    }

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jeu</title>
</head>
<body>

<form method="post" action="formulaire.php"> 

<span> liste des perso :<br></span>

<?php foreach ($nom as $key =>$value){
   
    echo $value;
    echo ";";
    

}
echo "<br>";
?>

<br> <br>


Nom : <input type="text" name="nom" value="<?php echo $nom1 ?>" size="12"><br> <br>
Force : <input type="text" name="force" value ="<?php echo $force1 ?>" size="12"><br> <br>
Localisation : <input type="text" name="loc" value="<?php echo $loc1 ?>" size="12"><br> <br>


<input type="submit" value="Chercher" name ="Chercher"> 
<input type="submit" value="Creer" name ="Creer"> 
<input type="submit" value="Supprimer" name ="Supprimer"> 
<input type="submit" value="Modifier" name ="Modifier"> 


</form>
</body>
</html>










