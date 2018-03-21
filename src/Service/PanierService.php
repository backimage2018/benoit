<?php


namespace App\Service;

use App\Entity\Panier;



class PanierService{
    

    public function _construct()
    {}
    
    public function Panier(){
        
        $Panierall=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBySomething("tt");
        dump($Panierall);
        return $Panierall;
       
    }
    
}

?>