<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
public function login(Request $request, AuthenticationUtils $authUtils)

{
    
    // get the login error if there is one
    $error = $authUtils->getLastAuthenticationError();
    
    
    // last username entered by the user
    $lastUsername = $authUtils->getLastUsername();
    
    return $this->render('security/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
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