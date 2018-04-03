<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StockRepository")
 * @ORM\Table(name="ben_Stock")
 */
class Stock
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer",options={"default"=0})
     */
    private $stockMagasin;
    /**
     * @ORM\Column(type="integer",options={"default"=0})
     */
    private $stockEntrepot;
    
   
    
    
    /**
     * @return mixed
     */
    public function getStockMagasin()
    {
        return $this->stockMagasin;
    }
    
    /**
     * @return mixed
     */
    public function getStockEntrepot()
    {
        return $this->stockEntrepot;
    }
    
    /**
     * @param mixed $stockMagasin
     */
    public function setStockMagasin($stockMagasin)
    {
        $this->stockMagasin = $stockMagasin;
    }
    
    /**
     * @param mixed $stockEntrepot
     */
    public function setStockEntrepot($stockEntrepot)
    {
        $this->stockEntrepot = $stockEntrepot;
    }
    
    // add your own fields
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
    

}
