<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;


/**
 * @ORM\HasLifecycleCallbacks
 */
trait TechnicalField
{
    
    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Assert\NotBlank()
     */
    private $user_Creation;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Assert\NotBlank()
     */
    private $date_Creation;
    /**
    * @ORM\Column(type="integer",nullable=true)
     * @Assert\NotBlank()
     */
    private $user_deleted;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Assert\NotBlank()
     */
    private $user_date;
    /**
     * @ORM\Column(type="boolean",nullable=true,options={"default":false})
     * @Assert\NotBlank()
     */
    private $deleted;
    /**
    * @ORM\Column(type="integer",nullable=true)
     * @Assert\NotBlank()
     */
    private $user_modif;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Assert\NotBlank()
     */
    private $date_modif;
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

    /**
     * @return mixed
     */
    public function getUser_deleted()
    {
        return $this->user_deleted;
    }

    /**
     * @param mixed $user_deleted
     */
    public function setUser_deleted($user_deleted)
    {
        $this->user_deleted = $user_deleted;
    }

    /**
     * @return mixed
     */
    public function getUser_Creation()
    {
        return $this->user_Creation;
    }

    /**
     * @return mixed
     */
    public function getDate_Creation()
    {
        return $this->date_Creation;
    }

    /**
     * @return mixed
     */
    public function getUser_delete()
    {
        return $this->user_delete;
    }

    /**
     * @return mixed
     */
    public function getUser_date()
    {
        return $this->user_date;
    }

    /**
     * @return mixed
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @return mixed
     */
    public function getUser_modif()
    {
        return $this->user_modif;
    }

    /**
     * @return mixed
     */
    public function getDate_modif()
    {
        return $this->date_modif;
    }

    /**
     * @param mixed $user_Creation
     */
    public function setUser_Creation($user_Creation)
    {
        $this->user_Creation = $user_Creation;
    }

    /**
     * @param mixed $date_Creation
     */
    public function setDate_Creation($date_Creation)
    {
        $this->date_Creation = $date_Creation;
    }

    /**
     * @param mixed $user_delete
     */
    public function setUser_delete($user_delete)
    {
        $this->user_delete = $user_delete;
    }

    /**
     * @param mixed $user_date
     */
    public function setUser_date($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * @param mixed $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * @param mixed $user_modif
     */
    public function setUser_modif($user_modif)
    {
        $this->user_modif = $user_modif;
    }

    /**
     * @param mixed $date_modif
     */
    public function setDate_modif($date_modif)
    {
        $this->date_modif = $date_modif;
    }
/**
 * @ORM\PrePersist
 */
 
    public function onPrePersist(){
        
        $this->deleted = "0";
        $this->date_Creation = new \DateTime("now");
        
    }
    
    /**
     * @ORM\PreUpdate
     */
    
    public function onPreUpdate(){
        
        $this->date_modif = new \DateTime("now");
        
    }
    /**
     * @ORM\PreRemove
     */
    
    public function onPreRemove(){
        
        $this->delete_date = new \DateTime("now");
        
    }
    
    
    
    
}


?>