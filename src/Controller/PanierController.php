<?php

// Controlleur pour le panier avec les routes : 
//     - Panier


namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\SerializerTest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\IsNull;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Entity\User;


class PanierController extends Controller
{
    /**
     * @Route("/panier", name="Panier")
     */

    public function panier(Request $request){
  
        $id=$request->request->get('id');
        
        
    $iduser= $this->getUser()->getid();
   
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->find($id);
        
         $user=$this-> getDoctrine()
         ->getRepository(User::class)
         ->find($iduser);
         var_dump($user);
        
        $Panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->cherchepanier($iduser,$id);
        dump($Panier);
     
                        
                     $panier=new Panier();
                     $panier->setQuantite("1");
                     $panier->setProduct($Product);
                     $panier->setNom("test");
                     $panier->setUser($user);
                     
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($panier);
                     $em->flush();
            
//          }else{
         
//              foreach ($Panier as $panierrow){
              
                 
//                  if ($panierrow->getProduct()->getid() == $id){
//                      $panierrow->setQuantite(($panierrow->getQuantite())+1);
//                      $em = $this->getDoctrine()->getManager();
//                      $em->persist($panierrow);
//                      $em->flush();
//                  }else{
//                      $panierrow=new Panier();
//                      $panierrow->setNom("tt");
//                      $panierrow->setQuantite("1");
//                      $panierrow->setProduct($Product);
//                      $em = $this->getDoctrine()->getManager();
//                      $em->persist($panierrow);
//                      $em->flush();
//                  }
           
//              }
      
         
         $Panier=$this-> getDoctrine()
         ->getRepository(Panier::class)
         ->findBySomething("tt");
         
//          $total = total($Panier);
//          dump($total);
       
          $encoder = new JsonEncoder();
          $normalizer = new ObjectNormalizer();
          $normalizer->setCircularReferenceHandler(function ($object) {
          return $object;
          });
            $serializer = new Serializer(array($normalizer), array($encoder));
            $panier= $serializer->serialize($Panier, 'json');
        //     return new Response( $serializer->serialize($panierrow, 'json'));
             return $this->render('base.html.twig',array (
                 "panier"=>json_decode($panier),
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