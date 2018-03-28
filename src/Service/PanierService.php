<?php


namespace App\Service;

use App\Entity\Panier;




class PanierService{
    

 
    
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
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        return $panier;
    }
}
?>