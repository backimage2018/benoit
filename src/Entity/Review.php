<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Product;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="ben_Review")
 */

class Review
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    
    private $mail;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $review;
    
    /**
     *@ORM\Column(type="integer")
     */
    
    private $note;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="Reviews")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Product;
    

                 
    /**
         * @return mixed
         */
        public function getProduct()
        {
            return $this->Product;
        }
    
        /**
         * @param mixed $Products
         */
        public function setProduct($Product)
        {
            $this->Product = $Product;
        }
    
    
    
        /**
         * @return mixed
         */
        public function getNote()
        {
            return $this->note;
        }
    
        /**
         * @param mixed $note
         */
        public function setNote($note)
        {
            $this->note = $note;
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
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
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
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $review
     */
    public function setReview($review)
    {
        $this->review = $review;
    }

}