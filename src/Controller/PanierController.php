<?php

// Controlleur pour le panier avec les routes : 
//     - Panier


namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Entity\User;
use App\Service\PanierService;


class PanierController extends Controller
{
    /**
     * @Route("/panier", name="Panier")
     */

    public function panier(Request $request, PanierService $PanierService){
        $quantite="";
     $id_product=$request->request->get('id');
     //$id_product="12";
    $iduser= $this->getUser()->getid();
    
    $quantite=$request->request->get('quantite');
        
    $quantites=$request->request->get('qty');
    
 
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->find($id_product);
        
         $user=$this-> getDoctrine()
         ->getRepository(User::class)
         ->find($iduser);
       
        
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findOneBy(array('Product' => $id_product,'user'=>$iduser));

        if (empty ($panier)){
                     $panier=new Panier();
                     $panier->setQuantite("1");
                     $panier->setProduct($Product);
                     $panier->setNom("test");
                     $panier->setUser($user);
                    
                 
         }else{
             if (is_null($quantite)AND is_null($quantites)){
                      $panier->setQuantite(($panier->getQuantite())+1);
             }
             else if (!is_null($quantites)){
                 
                 $panier->setQuantite(($panier->getQuantite())+$quantites);
             }
             else{
                 
                 $panier->setQuantite($quantite);
             }
             }
            $totalligne=($Product->getprix()*$panier->getQuantite());
            $panier->setPrixligne($totalligne);
          
             $em = $this->getDoctrine()->getManager();
             $em->persist($panier);
             $em->flush();
             $panier=$this-> getDoctrine()
             ->getRepository(Panier::class)
             ->findBy(array('user'=>$iduser));
             $total=$PanierService->total($panier);
             if (is_null($quantite)|| !is_null($quantites)){
             
             $panier=$this-> getDoctrine()
             ->getRepository(Panier::class)
             ->findBy(array('user'=>$iduser));
             $total=$PanierService->total($panier);
            
             }else{
                 $panier=$this-> getDoctrine()
                 ->getRepository(Panier::class)
                 ->findBy(array('Product' => $id_product,'user'=>$iduser));
                 }
                
          $panier["total"]=$total;
          
          $encoder = new JsonEncoder();
          $normalizer = new ObjectNormalizer();
          $normalizer->setCircularReferenceHandler(function ($object) {
          return $object;
          });
            $serializer = new Serializer(array($normalizer), array($encoder));
             $panier= $serializer->serialize($panier,'json');
              return new Response ($panier);
    }
    /**
     * @Route("/panier/delete", name="Panierdelete")
     */
    Public function panierdeleted(Request $request,PanierService $PanierService) {
   
    $id_panier=$request->request->get('id');

    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findOneBy(array('id' => $id_panier));
    
    $em = $this->getDoctrine()->getEntityManager();
    $em->remove($panier);
    $em->flush();
    
   
    $iduser= $this->getUser()->getid();
    $panier=$this-> getDoctrine()
    ->getRepository(Panier::class)
    ->findBy(array('user'=>$iduser));
    $total=$PanierService->total($panier);
    $panier["total"]=$total;
    
    $encoder = new JsonEncoder();
    $normalizer = new ObjectNormalizer();
    $normalizer->setCircularReferenceHandler(function ($object) {
        return $object;
    });
        $serializer = new Serializer(array($normalizer), array($encoder));
        $panier= $serializer->serialize($panier, 'json');
    return new Response( $panier );
}
}
?>