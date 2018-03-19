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


class PanierController extends Controller
{
    /**
     * @Route("/panier", name="Panier")
     */

    public function Review(Request $request){
     
      
//         $id =$request->get('idproduct');
        $id ="13";
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->find($id);
      
        
        $Panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBySomething("tt");
       
         if (empty($Panier)) {
                        
                     $panierrow=new Panier();
                     $panierrow->setNom("tt");
                     $panierrow->setQuantite("1");
                     $panierrow->setProduct($Product);
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($panierrow);
                     $em->flush();
            
         }else{
             foreach ($Panier as $panierrow){
                 
                 if ($panierrow->getProduct()->getid() == $id){
                     $panierrow->setQuantite(($panierrow->getQuantite())+1);
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($panierrow);
                     $em->flush();
                 }else{
                     $panierrow=new Panier();
                     $panierrow->setNom("tt");
                     $panierrow->setQuantite("1");
                     $panierrow->setProduct($Product);
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($panierrow);
                     $em->flush();
                 }
           
             }
         }
         
         $encoder = new JsonEncoder();
         $normalizer = new ObjectNormalizer();
         
         $normalizer->setCircularReferenceHandler(function ($object) {
             return $object->getNom();
         });
             
             $serializer = new Serializer(array($normalizer), array($encoder));
             var_dump($serializer->serialize($Panier, 'json'));
         return ;
        
    }
}
?>