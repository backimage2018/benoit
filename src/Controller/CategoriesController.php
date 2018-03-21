<?php
namespace App\Controller;


use App\Entity\Image;
use App\Entity\Panier;
use App\Entity\Product;
use App\Entity\Review;
use App\Service\FileUploader;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Doctrine\DBAL\Driver\PDOException;
use Doctrine\ORM\Mapping\Id;



class CategoriesController extends Controller
{
    
/**
 * @Route("/women", name="women")
 */
Public function catWomen(){
    
   
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie("women");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/men", name="men")
 */
Public function catMen(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie("men");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}

/**
 * @Route("/menclothing", name="menclothing")
 */
Public function catmenclothing(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie2("men","Vetements");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/womenclothing", name="womenclothing")
 */
Public function catwomenclothing(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie2("women","Vetements");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/PhonesandAccessories", name="PhonesandAccessories")
 */
Public function catPhonesandAccessories(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("phone","Accessories");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/COMPUTERANDOFFICE", name="COMPUTERANDOFFICE")
 */
Public function catCOMPUTERANDOFFICE(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("COMPUTER","OFFICE");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/CONSUMERELECTRONICS", name="CONSUMERELECTRONICS")
 */
Public function catCONSUMERELECTRONICS(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("CONSUMERELECTRONICS","");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/JewelryWatches", name="JewelryWatches")
 */
Public function catJewelryWatches(){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("Jewelry","Watches");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
/**
 * @Route("/BagsShoes", name="BagsShoes")
 */
Public function catBagsShoes(){
    
    
    $Panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBySomething("tt");
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("Bags","Shoes");
    
    
    return $this->render('products.php.twig',array(
        'article'=>$articles,
        'panier'=>$Panier,
        ////base
        "welcome"=>constante::welcome,
        "logo"=>constante::logo,
        "menuheader"=>constante::menuheader,
        "langue"=>constante::langue,
        "devise"=>constante::devise,
        "searchcategories"=>constante::searchcategories,
        "custommenus"=>constante::custommenu,
        "categorieshead"=>constante::categorieshead,
        "ressocial"=>constante::ressocial,
        "Account_login" =>constante::Account_login,
        "Account_join" => constante::Account_join,
        "footermyaccount"=>constante::footer_my_account,
        "footerCustomer"=>constante::footer_Customer_Service,
        "footer_subscribe_h3"=>constante::footer_subscribe_h3,
        "footer_subscribe_p"=>constante::footer_subscribe_p,
        "menunav"=>constante::menunav,
        "footer_subscribe_button"=>constante::footer_subscribe_button,
        "categories"=>constante::categories));
}
}
?>