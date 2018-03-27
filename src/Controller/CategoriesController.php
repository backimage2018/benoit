<?php
namespace App\Controller;


use App\Entity\Image;
use App\Entity\Panier;
use App\Entity\Product;
use App\Entity\Review;
use App\Service\FileUploader;
use App\Service\PanierService;
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
    Public function catWomen(PanierService $PanierService){
    
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie("women");
    
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catMen(PanierService $PanierService){
    
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie("men");
    
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catmenclothing(PanierService $PanierService){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie2("men","Vetements");
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catwomenclothing(PanierService $PanierService){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie2("women","Vetements");
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catPhonesandAccessories(PanierService $PanierService){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("phone","Accessories");
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catCOMPUTERANDOFFICE(PanierService $PanierService){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("COMPUTER","OFFICE");
    
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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
Public function catCONSUMERELECTRONICS(PanierService $PanierService){
    
    
    
    $articles= $this->getDoctrine()
    ->getRepository(Product::class)
    ->categorie3("CONSUMERELECTRONICS","");
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    
    return $this->render('products.php.twig',array(
        "panier"=>$panier,
        "total"=>$total,
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