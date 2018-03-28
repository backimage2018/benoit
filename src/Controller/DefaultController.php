<?php

/* Controlleur pour le panier avec les routes :
                -index
                -checkout
                -blank
                -viewcard
                -profil
                -about
                -shippingandreturn
                -shipping_guide
                -faq
                -store
                -mention_legale
                -exception
*/
namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use App\Service\PanierService;
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
    
    
    Public function index(TranslatorInterface $ti,PanierService $PanierService){

        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
   //variable commune     
        $param = [];
       
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        
        $articleforyou= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findByAlllimit();

        
        $articlenew= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findBynew('oui');
        
        $articledeal= $this-> getDoctrine()
        ->getRepository(Product::class)
        ->findAll();
        $param['article']=$articleforyou;
        $param['articlesnew']=$articlenew;
        $param['articledeal']=$articledeal;
    
  
        return $this->render('index.php.twig',$param 
//             array(
//                 "panier"=>$panier,
//                 "total"=>$total,


    );
        
    }

   
    /**
     * @Route("/checkout" , name="checkout")
     */
    
    function checkout(PanierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        

        
        return $this->render('checkout.php.twig',$param);
  
        
    }
    /**
     * @Route("/blank" , name="blank")
     */
    
    function blank(PanierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
        $param = [];
        /* data for header */
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('blank.php.twig',$param);
        
    }
    /**
     * @Route("/viewcard" ,name="viewcard")
     */
    
    function viewcard(PanierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
            
        return $this->render(
            'viewcard.html.twig',$param);
        
    }

    /**
     * @Route("/profil" ,name="profil")
     */
    
    
    function profil(PanierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
  
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('profil.html.twig',$param);
        
    }
    /**
     * @Route("/about" ,name="about")
     */
    

    function about(PanierService $PanierService){
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
//         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('about.html.twig',$param);
    }
    
    /**
     * @Route("/shippingandreturn",name="shippingandreturn")
     */
    
    
    function shippingandreturn(PanierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('shippingandreturn.html.twig',$param);
        
    }
    
    
    /**
     * @Route("/shipping_guide",name="shipping_guide")
     */
    
    
    function  shipping_guide(panierService $PanierService){
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('shipping_guide.html.twig',$param);
        
    }

    /**
     * @Route("/faq",name="FAQ")
     */
    
    function  faq(panierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('faq.html.twig',$param);
    }
    /**
     * @Route("/mention_legale", name ="mention_legale")
     */
    
    
    function  mention_legale(panierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('mention_legale.html.twig',$param);
        
    }
    /**
     * @Route("/store", name="store")
     */
    
    
    function  store(panierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
        
        return $this->render('store.html.twig',$param);
        
    }

    /**
     * @Route("/exception", name ="exception")
     */
    function  exception(panierService $PanierService){
        
        $iduser= $this->getUser()->getid();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        //         variable commune
        $param = [];
        
        $param = constante::variable($param);
        $param['panier']=$panier;
        $param['total']=$total;
        $param=constante::variableindex($param);
    return $this->render('Exception/error404.html.twig',$param);
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