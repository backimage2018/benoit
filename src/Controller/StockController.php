<?php


/* Controlleur pour le panier avec les routes :
 -dashboard
-entrepot
-magasin
-Stock
-vignette
 */


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Image;
use App\Entity\Product;

use App\Service\FileUploader;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use App\Entity\Stock;
use App\Form\ProductType;
        
 Class StockController extends Controller
{
    
    // Route vers dashboard
    /**
     * @Route("admin/dashboard", name="dashboard")
     */
    Public function dashboard(Request $request,FileUploader $fileUploader){
 // sortir tous les produits en stock et visible        
        $article=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->articleenstock();
 // articles pas visible 
        $articlenoshow=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->articlenoshow();

        
// creation de l'alerte         
        $message=[];
        for ($i = 0; $i < count($article); $i++){
            $stockentrepot= $article[$i]->getStock()->getStockentrepot();
            $stockmagasin=$article[$i]->getStock()->getStockmagasin();
            $nomproduit=$article[$i]->getnom();
        
            $message[$i]=$this->alert($stockentrepot,$stockmagasin,$nomproduit);
        }
        
        
 //creation du formulaire ajout d'un produit 
 
        $Product = new Product();
        $Image = new Image();
       
        
        $form = $this->createForm(ProductType::class, $Product);
        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $file = $Product->getImage()->getlien();
            $fileName = $fileUploader->upload($file);
            $Image->setLien($fileName);
            $Image->setProduct($Product);
            $Product->setImage($Image);
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($Product);
            $em->flush();
            
            return $this->redirectToRoute('dashboard');
            
        }
    
 

 //     Variables
    $param=[];
    $param['article'] = $article;
    $param['messages'] = $message;
    $param['articlenoshow']=$articlenoshow;
   
    $param['articlenoshow']=$articlenoshow;
    
    //variable de la page
    $param['form']=$form->createView();
    $param['image']="";
   
    return $this->render('admin/dashboard.html.twig',$param);
    
}
 
 
// Route vers entrepot
/**
 * @Route("admin/entrepot", name="entrepot")
 */
Public function entrepot(Request $request){
    
    // requetes pour liste d'articles ($articles)
    $article=$this-> getDoctrine()
    ->getRepository(Product::class)
    ->findAll();
    // requetes pour liste des messages pb de stock ($message)
    $message=[];
    for ($i = 0; $i < count($article); $i++){
        $stockentrepot= $article[$i]->getStock()->getStockentrepot();
        $stockmagasin=$article[$i]->getStock()->getStockmagasin();
        $nomproduit=$article[$i]->getnom();
        
        $message[$i]=$this->alert($stockentrepot,$stockmagasin,$nomproduit);
    }
    
    //     Variables
    $param=[];
    $param['article'] = $article;
    $param['messages']=$message;
    return $this->render('admin/Entrepot.html.twig',$param);
}
// Route vers Magasin
/**
 * @Route("admin/magasin", name="magasin")
 */
Public function magasin(Request $request){
    
    // requetes pour liste d'articles ($articles)
    $article=$this-> getDoctrine()
    ->getRepository(Product::class)
    ->findall();
    // requetes pour liste des messages pb de stock ($message)
    $message=[];
    for ($i = 0; $i < count($article); $i++){
        $stockentrepot= $article[$i]->getStock()->getStockentrepot();
        $stockmagasin=$article[$i]->getStock()->getStockmagasin();
        $nomproduit=$article[$i]->getnom();
        
        $message[$i]=$this->alert($stockentrepot,$stockmagasin,$nomproduit);
    }
    
    
    //     Variables
    $param=[];
    $param['article'] = $article;
    $param['messages']=$message;
    return $this->render('admin/magasin.html.twig',$param);
}


/**
 * @Route("/vignette", name="vignette")
 */
Public function vignette(Request $request){
    //recuperation de l'id produit
    $id_produit=$request->request->get('id_product');

    //recuperation du produit pour la vignette
    $vignette=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
    // tableau de donnée 
  
    $vignette=$vignette[0];
    $result=[];
    $result['image']=$vignette->getimage()->getlien();
    $result['nom']=$vignette->getnom();
    $result['prix']=$vignette->getprix();
    $result['id']=$vignette->getid();

    
    return new JsonResponse ($result);
}

/**
 * @Route("/stockm", name="stockm")
 */
Public function stockm(Request $request){
    
    //recuperation des stock et de l'id produit 
    $id_produit=$request->request->get('id_product');
   // $id_produit="13";
    $stock=$request->request->get('stock');
   // $stock="50";
   //recuperation du produit pouyr avoir le stock 
    $resultat=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
   
  //declaration des variables   
    $objproduct=$resultat['0'];
    $stockentrepot= $objproduct->getStock()->getStockentrepot();
    $stockmagasin=$objproduct->getStock()->getStockmagasin();
   
    if ($stock <= $stockentrepot)
    
    {
        $objproduct->getStock()->setstockMagasin($stockmagasin+$stock);
        $objproduct->getStock()->setStockentrepot($stockentrepot-$stock);
        $em = $this->getDoctrine()->getManager();
        $em->persist($objproduct);
        $em->flush();
        
    }
    
    
    $resultat=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
    $nomproduit=$objproduct->getnom();
    $stockentrepot= $objproduct->getStock()->getStockentrepot();
    $stockmagasin=$objproduct->getStock()->getStockmagasin();
    $message=$this->alert($stockentrepot,$stockmagasin,$nomproduit);
    

    
    $result=[];
    
    $result['magasin']=$stockmagasin;
    $result['entrepot']=$stockentrepot;
    $result['alerte']=$message;
   
    return new JsonResponse ($result);
    

    
}
/**
 * @Route("/stocke", name="stocke")
 */
Public function stocke(Request $request){
    //recuperation des stock et de l'id produit
    $id_produit=$request->request->get('id_product');
    $stock=$request->request->get('stock');
    
    //recuperation du produit pouyr avoir le stock
    $resultat=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
    //declaration des variables
    $objproduct=$resultat['0'];
    $stockentrepot= $objproduct->getStock()->getStockentrepot();
   
   // ajout du stock au stock entreprise 
    $objproduct->getStock()->setStockentrepot($stockentrepot+$stock);
    $em = $this->getDoctrine()->getManager();
    $em->persist($objproduct);
    $em->flush();
    //
    $resultat=$this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id_produit));
    $stockentrepot= $objproduct->getStock()->getStockentrepot();
    $stockmagasin=$objproduct->getStock()->getStockmagasin();
    $nomproduit=$objproduct->getnom();
    $message=$this->alert($stockentrepot,$stockmagasin,$nomproduit);
    
    //mise en place des resultat dans un tableau 
    $result=[];
    $result['entrepot']=$stockentrepot;
    $result['alert']=$message;
    return new JsonResponse ($result);
}
/**
 * @Route("/admin/majstock/{id}", name="majstock")
 */
Public function majstock(Request $request ,$id ){
// initialisation des varialble quantite (entrepot et magasin)
    $qtyent=0;
    $qtymag=0;
  //recuperer le produit a mettre a jour   
    $Product=$this-> getDoctrine()
    ->getRepository(Product::class)
    ->findOneBy(array('id' => $id));
    // recuperer les quantites
    $qtymag=($_GET['row-1-Quantite']);
    $qtyent=($_GET['row-2-Quantite']);
    
  $Product->setdisplay("oui");
  $Product->getStock()->setStockentrepot($qtyent);
  $Product->getStock()->setStockmagasin($qtymag);
  // envoie dans la bdd
    $em = $this->getDoctrine()->getManager();
    $em->persist($Product);
    $em->flush();
    
    return  $this->redirect('../dashboard');
    
}



// fonction qui gere les alertes 
public function alert($stockentrepot,$stockmagasin,$nomproduit ){
    $messagemag="";
    $messageent="";
    if ($stockmagasin  < 3){
        
        $messagemag="Le stock magasin du produit " .$nomproduit. " est inferieur a 3";
        
    }
    if ($stockentrepot <3) {
        
        $messageent="Le stock Entrepot du produit " .$nomproduit. " est inferieur a 3";
    }
    
    $message= [];
    $message['messagemag']=$messagemag;
    $message['messageent']=$messageent;
    
    return ($message);
    
}

 }
?>
