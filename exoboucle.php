<?php

// [3,8,-3,4,7,-2,0,7,-3]

//A afficher les temperatures négatives avec une boucle FOR 




$temperature = [3,8,-3,4,7,-2,0,7,-3];

for ($i=0; $i<count($temperature);$i++ ){
    
    if ($temperature[$i] <0){
    
    echo $temperature[$i];
    echo "<br>";
    }
    
}
echo "<br>";
//b multiplier les ficher par 3 boucle while 

$j=0;


while ( $j < count($temperature) ){
    
    
    $temperature[$j] = $temperature[$j]*3;
    
  
    $j++;
   

}

print_r($temperature);
echo "<br>";
echo "<br>";

// for each deplacer les valeur négatives et 0 
$temperature = [3,8,-3,4,7,-2,0,7,-3];
$tempneg = array();
$temperature1 =array();
foreach ($temperature as $valeur){

    
    if ($valeur<=0) {
        
        $tempneg[] = $valeur;
    
    }
    else {
        
        $temperature1[] = $valeur;
    }
        
}

print_r($tempneg);
echo "<br>";
echo "<br>";
print_r($temperature1);
echo "<br>";
echo "<br>";


// 2. ['lundi'->8,'Mardi'->12,Mercredi->15,'jeudi'->13,'Vendredi'->11,'samedi'->6,'dimanche' ->1]

$jour =array('lundi'=> 8,'Mardi'=> 12,'Mercredi'=> 15,'jeudi'=> 13,'Vendredi'=> 11,'samedi'=> 6,'dimanche' => 1);

foreach ($jour as $key => $valeur){
    
    if ($valeur < 10) {
        
        echo $key;
        echo "<br>";
        
        
    
}
    
    
}

//B

print_r($jour);
echo "<br>";


asort($jour);

foreach ($jour as $key => $valeur){
   
    echo($key)  ;
    echo "<br>";
}

echo "<br>";

//3 A

$jour =array('lundi'=>array('am'=>7,'pm'=>14),'mardi'=>array('am'=>8,'pm'=>15),'mercredi'=>array('am'=>9,'pm'=>12),'jeudi'=>array('am'=>6,'pm'=>12),'vendredi'=>array('am'=>7,'pm'=>11),'samedi'=>array('am'=>8,'pm'=>10),'dimanche'=>array('am'=>8,'pm'=>15));


foreach ($jour as $keys => $valeur){
    
    $ecart =$valeur['pm'] -$valeur['am'];
    
    
    
    echo $ecart;
    echo "<br>";
}
echo "<br>";  
echo "les valeurs superieur à 9 sont : <br>";

foreach ($jour as $keys => $valeur){
   
 
 
    
    foreach ($valeur as $key => $valeur)
      
        if ($valeur >9)
            
            echo $keys ." " .$key ." ". $valeur ;
            echo "<br>";
     
        
    
        
            
    
   
}



//B

?>
 

