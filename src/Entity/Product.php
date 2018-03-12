<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Review;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\DateType;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    
    private $nom;
    
    /**
     * @ORM\Column(type="string")
     */
    
    private $prix;
    /**
     * @ORM\Column(type="string")
     */
    
    private $ancienprix;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     * 
     */
    
    private $taille;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    
    private $couleur;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    
    private $collection;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    
    private $description;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    
    private $disponibilite;
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    
    private $marque;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    
    private $detail;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    
    private $categorie;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    
    private $sexe;
    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    
    private $reduction;
    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    
    private $new;
    /**
     * @ORM\Column(type="string", length=10,nullable=true)
     */
    
    private $display;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     */
    private $date_fin_promo;
    
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade={"persist"})
     */
    private $image;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Review", mappedBy="Product", cascade={"persist"})
     */
    private $Reviews;
    
    /**
     *
     * @ORM\Column(name="deleted", type="datetime", nullable=true)
     */
    private $deleted;

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function __construct()
    {
        $this->Reviews = new ArrayCollection();
    }
  
    
    /**
     * @return mixed
     */
    public function getReviews()
    {
        return $this->Reviews;
    }

    /**
     * @param mixed $Reviews
     */
    public function setReviews($Reviews)
    {
        $this->Reviews = $Reviews;
    }

    /**
     * @return mixed
     */
    public function getDate_fin_promo()
    {
        return $this->date_fin_promo;
    }

    /**
     * @param mixed $date_fin_promo
     */
    public function setDate_fin_promo($date_fin_promo)
    {
        $this->date_fin_promo = $date_fin_promo;
    }

    /**
     * @return mixed
     */
    public function getAncienprix()
    {
        return $this->ancienprix;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $ancienprix
     */
    public function setAncienprix($ancienprix)
    {
        $this->ancienprix = $ancienprix;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

  



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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @return mixed
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * @return mixed
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

   

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @param mixed $reduction
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;
    }

    /**
     * @param mixed $new
     */
    public function setNew($new)
    {
        $this->new = $new;
    }

    /**
     * @param mixed $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

   
    
}
