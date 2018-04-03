<?php

/* Controlleur pour le panier avec les routes : 
    - Panier
     -delete panier
*/

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
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
        
        
     $quantite=1;
     
// recuperation des id produit user et les quantite (product_page et viewcart)
     $id_product=$request->request->get('id');
     $iduser= $this->getUser()->getid();
//quantite de viewcart 
    $quantite=$request->request->get('quantite');
//quantite de product_page
    $quantites=$request->request->get('qty');
   
 
    
// requete base de donnees pour ressortir le produit $Product a modifier ou creer, 
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->find($id_product);
//  le user du panier $user
         $user=$this-> getDoctrine()
         ->getRepository(User::class)
         ->find($iduser);
         
         $stockmagasin= $Product->getStock()->getStockmagasin();


//verification si le produit est deja dans la panier de l'user 
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findOneBy(array('Product' => $id_product,'user'=>$iduser));
        
        
        
        /* On test si la quantité demandé est > à la quantité restante en magasin*/
        
        if ($quantite > $stockmagasin || $quantites> $stockmagasin ) {
            $result=[];
            $result['error'] = "Quantité trop important merci de choisir au maximum ".$stockmagasin. " de ce produit ";
            
            return $this->json($result);
            
        }else{
//test pour mettre la quantite 
        if (empty ($panier)){
                     $panier=new Panier();
                     $panier->setQuantite("1");
                     $panier->setProduct($Product);
                     $panier->setNom("test");
                     $panier->setUser($user);
                    
                 
         }else{
             if (is_null($quantite)AND is_null($quantites)){
                      $panier->setQuantite(($panier->getQuantite())+1);
                      $panier->getProduct()->getstock()->setstockMagasin($panier->getProduct()->getstock()->getstockMagasin()-1);
             }
             else if (!is_null($quantites)){
                 
                 $panier->setQuantite(($panier->getQuantite())+$quantites);
                 $panier->getProduct()->getstock()->setstockMagasin($panier->getProduct()->getstock()->getstockMagasin()-$quantites);
             }
             else{
                 
                 $panier->setQuantite($quantite);
                 $panier->getProduct()->getstock()->setstockMagasin($panier->getProduct()->getstock()->getstockMagasin()-$quantite);
             }
             }
//calcul des totaux des lignes
            $totalligne=($Product->getprix()*$panier->getQuantite());
            $panier->setPrixligne($totalligne);
//mise a jour de la bdd
            
            
         
             $em = $this->getDoctrine()->getManager();
             $em->persist($panier);
             $em->flush();
//requete du panier mis a jour             
             $panier=$this-> getDoctrine()
             ->getRepository(Panier::class)
             ->findBy(array('user'=>$iduser));
             //calcul du total
             $total=$PanierService->total($panier);
             
             if (!is_null($quantite)){
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

/**
 * @Route("/testpanier", name="testpanier")
 */
// test panier si la quantite demande nest pas superieur a la quantite du magasin
Public function testpanier(Request $request) {
    $id_produit=$request->request->get('id');
    $quantite=$request->request->get('qty');
    
    $resultat=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
    $stockmagasin= $resultat['0']->getStock()->getStockmagasin();
    $message=[];
    $message['erreur'] ="";
    $message['succes'] = "";
    If ($quantite>$stockmagasin){
      
        $message['erreur'] = "Quantité trop important merci de choisir au maximum ".$stockmagasin. " de ce produit ";
    }else{
        $message['succes'] = 'ok';
    }
    
    return new JsonResponse ($message);
}
}
?>