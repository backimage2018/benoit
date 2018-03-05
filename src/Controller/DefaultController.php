<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;

class DefaultController extends Controller{
   
    /**
     * @Route("/",name="index")
     */
    
    
    Public function recherche(){
        
        $article= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findAll();
        
        $articlenew= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findBynew('new');
        
     
        return $this->render('index.php.twig',array("index_banner"=>constante::index_banner,
                                                    "index_section_banner"=>constante::index_section_banner,
                                                    "index_deals_banner"=>constante::index_deals_banner,
                                                    "index_sectiongrey_banner"=>constante::index_sectiongrey_banner,
                                                    "index_sectiongrey_banner1"=>constante::index_sectiongrey_banner1,
                                                    "index_latest_product"=>constante::index_latest_product,
                                                    'article'=>$article,
                                                    'articlesnew'=>$articlenew,
                                                    
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
     * @Route("/checkout")
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
     * @Route("/blank")
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
     * @Route("/shipping_guide")
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
     * @Route("/faq")
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
     * @Route("/mention_legale")
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
     * @Route("/store")
     */
    
}

?>