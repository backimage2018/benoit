<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\Translation\TranslatorInterface;
use Doctrine\DBAL\Driver\PDOException;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{
   
    /**
     * @Route("/",name="index")
     */
    
    
    Public function index(TranslatorInterface $ti){

        $articleforyou= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findByAlllimit();

        
        $articlenew= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findBynew('oui');
        
        $articles= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findAll();
        
        $Panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBySomething("tt");
        
  
        return $this->render('index.php.twig',array(
            "panier"=>$Panier,
            "index_banner"=>constante::index_banner,
                                                    "index_section_banner"=>constante::index_section_banner,
                                                    "index_deals_banner"=>constante::index_deals_banner,
                                                    "index_sectiongrey_banner"=>constante::index_sectiongrey_banner,
                                                    "index_sectiongrey_banner1"=>constante::index_sectiongrey_banner1,
                                                    "index_latest_product"=>constante::index_latest_product,
                                                    'article'=>$articleforyou,
                                                    'articlesnew'=>$articlenew,
                                                    'articledeal'=>$articles,
                                                    
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
     * @Route("/checkout" , name="checkout")
     */
    
    function checkout(){
        
        
        return $this->render('checkout.php.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/blank" , name="blank")
     */
    
    function blank(){
        
        
        return $this->render('blank.php.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/viewcard")
     */
    
    
    function viewcard(){
        
        
        return $this->render('viewcard.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/profil")
     */
    
    
    function profil(){
        
        
        return $this->render('profil.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/about")
     */
    
    
    function about(){
        
        
        return $this->render('about.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/shippingandreturn")
     */
    
    
    function shippingandreturn(){
        
        
        return $this->render('shippingandreturn.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/shipping_guide",name="shipping_guide")
     */
    
    
    function  shipping_guide(){
        
        
        return $this->render('shipping_guide.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/FAQ",name="FAQ")
     */
    
    function  faq(){
        
        
        return $this->render('faq.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/mention_legale", name ="mention legale")
     */
    
    
    function  mention_legale(){
        
        
        return $this->render('mention_legale.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/store")
     */
    
    
    function  store(){
        
        
        return $this->render('store.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/exception", name ="exception")
     */
    function  exception(){
    return $this->render('Exception/error404.html.twig',array ("welcome"=>constante::welcome,
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
     * @Route("/lazy", name ="lazy")
     */
    function  lazy(Request $request){
        
        $rep=$this-> getDoctrine()->getRepository(Product::class);
        $deal=$rep->find(1);
       
        return new Response('done');

}
}

?>