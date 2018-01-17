<html>
<head>
 <meta charset="utf-8">
</head>
<?php

class personnage {
    
    private $id ="";
    private $name ="";
    private $force_perso =50;
    private $loc ="";
    private $degat=0;
    private $exp=0;
    
 

  

    //  public function __construct($name){
        
  //      $this->name =$name;
        
  //  }
    public function __construct(){
        
               
    }
    
    
    public function frapper ($persoQueLonFrappe){
        
        $persoQueLonFrappe -> degat = $this->force_perso +  $persoQueLonFrappe -> degat;
        $this->experience ();
    }
    
    public function experience (){
        
        $this->exp=$this->exp + 1;
        
    }
    
    public function hydrate($lignefetch){
        
        foreach($lignefetch as $key => $value){
            $methodname = 'set'.ucfirst($key);
            if (method_exists ($this,$methodname)){
                
                $this->$methodname($value);
            
            }
        }
                
    }
        
    
    
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return number
     */
    public function getForce_perso()
    {
        return $this->force_perso;
    }

    /**
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @return number
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * @return number
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param string $name
     */
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param number $force
     */
    public function setForce_perso($force_perso)
    {
        $this->force_perso = $force_perso;
    }

    /**
     * @param string $loc
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
    }

    /**
     * @param number $degat
     */
    public function setDegat($degat)
    {
        $this->degat = $degat;
    }

    /**
     * @param number $exp
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function affichecarac(){
       
        echo '-nom :' .$this -> getName()."<br>";
        echo '-force :' .$this -> getForce()."<br>";
        echo '-Experiences :' .$this -> getExp()."<br>";
        echo '-Localisation : ' .$this-> getLoc()."<br>";
        echo '-Dégats : ' .$this-> getDegat()."<br> <br>";
        
        
        
    }
 }
   
?>

</html>