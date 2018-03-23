<?php


namespace App\Service;




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
    
}
?>