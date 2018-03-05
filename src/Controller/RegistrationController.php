<?php
namespace App\Controller;

use App\Entity\Newsletter;
use App\Entity\User;
use App\Form\NewsletterType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends Controller
{
    /**
     * @Route("/join", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
        $user->setRole(array('ROLE_USER'));
        $form = $this->createForm(UserType::class, $user);
        
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            
            return $this->redirectToRoute('index');
        }
        
        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView(),
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