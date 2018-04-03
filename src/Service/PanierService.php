<?php


namespace App\Service;

use App\Entity\Panier;




class PanierService{
    

 
    //calcul du total du panier 
    public function total($panier){
        $total = 0;
        if ($panier != null ) {
            foreach ($panier as $paniers) {
                $total += $paniers->getPrixligne();
                
            }
        }
       
        return $total;
        
    }
    
    public function panier(){
        
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        return $panier;
    }
}
?>