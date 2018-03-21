<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Product;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\DateType;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier implements \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Nom;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Quantite;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="Paniers", cascade={"persist"}))
     * @ORM\JoinColumn(nullable=true)
     */
    Private $Product;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    
    private $user;
    
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function total($Product)
    {
        $total = 0;
        if ($Product != null && count($Products) > 0) {
            foreach ($Product as $prod) {
                $total += $prod->getPrix();
            }
        }
        return $total;
    }
    
    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @param mixed $Product
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
    }




    /**
     * @return mixed
     */
    
    // add your own fields

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

 

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->Quantite;
    }

    

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 

    /**
     * @param mixed $Quantite
     */
    public function setQuantite($Quantite)
    {
        $this->Quantite = $Quantite;
    }
    public function serialize()
    {
        return [
            'id' => $this->getId(),
            'nom' => $this->getNom()
        ];
        
    }

    public function unserialize($serialized)
    {}


}
