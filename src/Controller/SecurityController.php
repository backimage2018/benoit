<?php
/* Controlleur pour le panier avec les routes :
 -login
 
 */

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
    
    //variable commune
    $param = [];
    $param = constante::variable($param);
    //variable dans la page
    $param['last_username']=$lastUsername;
    $param['error']=$error;
    
    return $this->render('security/login.html.twig', $param);
  
}

}
?>