<?php

class personnageDAO
{
    private $pdo;
    
    
    public function deletePersonnageByID ($persoId){
        
        $sql="DELETE FROM PERSONNAGE WHERE ID =:id;";
        
        $prepareSt = $this->getPdo()->prepare ($sql);
        $prepareSt -> bindValue(":id",$persoId,pdo::PARAM_INT);
        $prepareSt -> execute();
        
    }
    public function deletePersonnageByName ($persoName){
        
        $sql="DELETE FROM PERSONNAGE WHERE name =:name;";
        
        $prepareSt = $this->getPdo()->prepare ($sql);
        $prepareSt -> bindValue(":name",$persoName,pdo::PARAM_STR);
        $prepareSt -> execute();
        
    }
    
public function addPersonnage($personnage)
{
 $sql = 'INSERT INTO PERSONNAGE 
            (name,force_perso,loc,degat,exp) 
        VALUES
          (:name,:force_perso,:loc,:degat,:exp);';
 
 $prepareSt = $this->getPdo()->prepare ($sql);
 $prepareSt -> bindValue(":name",$personnage->getName(),pdo::PARAM_STR);
 $prepareSt -> bindValue(":force_perso",$personnage->getForce_perso(),pdo::PARAM_INT);
 $prepareSt -> bindValue(":loc",$personnage->getLoc(),pdo::PARAM_STR);
 $prepareSt -> bindValue(":degat",$personnage->getDegat(),pdo::PARAM_INT);
 $prepareSt -> bindValue(":exp",$personnage->getExp(),pdo::PARAM_INT);
 $prepareSt -> execute();
 
 $lastID =$this->getPdo()->lastInsertId();
 $personnage ->setId($lastID);

    
    }
    
    public function getpersonnageByName($name) {
        
        $sql = "select name,id,force_perso,exp,loc,degat FROM personnage where name =:name;";
            $prepareSt = $this->getPdo()->prepare ($sql);
            $prepareSt -> bindValue(":name",$name,pdo::PARAM_STR);
            $prepareSt -> execute();
           $result = $prepareSt ->fetch(PDO::FETCH_ASSOC);
           
          
               $loadperso =new personnage();
               $loadperso -> hydrate($result);
               $perso[] = $loadperso;
               
      
           
           return ($perso) ;
           
    }
    public function getpersonnageAll() {
        
        $sql = 'select name,id,force_perso,exp,loc,degat FROM personnage;';
        $prepareSt = $this->getPdo()->prepare ($sql);
        $prepareSt -> execute();
        $result = $prepareSt ->fetchall (PDO::FETCH_ASSOC);
        
        $perso= array();
        foreach ($result as $key => $valeur){
            
            $loadperso =new personnage();
            $loadperso -> hydrate($valeur);
            $perso[] = $loadperso;
        }
       
        return ($perso) ;
       
    }
    
    public function getpersonnageexist($persoName) {
        
        $sql = 'select name,id,force_perso,exp,loc,degat FROM personnage where name = :name';
        $prepareSt = $this->getPdo()->prepare ($sql);
        
        $prepareSt -> bindValue(":name",$persoName,pdo::PARAM_STR);
        $prepareSt -> execute();
        $result = $prepareSt ->fetchall (PDO::FETCH_CLASS,'personnage');
      
        if (isset($result)){
            return $result;
        }
        
    }
    
    
    
    
    public function updatepersonnagebyId($personnage) {
        
        $sql ='UPDATE personnage SET force_perso=:force_perso,name=:name,exp=:exp,loc=:loc,degat=:degat WHERE id=:id;';
        $prepareSt = $this->getPdo()->prepare ($sql);
        
        $prepareSt -> bindValue(":name",$personnage->getName(),pdo::PARAM_STR);
        $prepareSt -> bindValue(":force_perso",$personnage->getForce_perso(),pdo::PARAM_INT);
        $prepareSt -> bindValue(":loc",$personnage->getLoc(),pdo::PARAM_STR);
        $prepareSt -> bindValue(":degat",$personnage->getDegat(),pdo::PARAM_INT);
        $prepareSt -> bindValue(":exp",$personnage->getExp(),pdo::PARAM_INT);
        $prepareSt -> bindValue(":id",$personnage->getid(),pdo::PARAM_INT);
        $prepareSt -> execute();
      
   
    }
    
    
    
    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param mixed $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }

    
}



?>