<?php


/* Controlleur pour le panier avec les routes :
 -dashboard
-entrepot
-magasin
-Stock
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
        
        $article=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->findAll();
 
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
            
        }
    
       
 //     Variables
    $param=[];
    $param['article'] = $article;
   
    
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
    
    //     Variables
    $param=[];
    $param['$article'] = $article;
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
    
    //     Variables
    $param=[];
    $param['stock'] = $article;
    return $this->render('admin/magasin.html.twig',$param);
}

/**
 * @Route("/stock", name="stock")
 */
Public function stock(Request $request){
    
    $id_stock=$request->request->get('id');
   // $id_stock="1";
    $stock=$request->request->get('stock');
   // $stock="50";
    $resultat=$this->getDoctrine()->getRepository(Stock::class)->findBy(array('id'=>$id_stock));
    $objstock=$resultat['0'];
    if ($stock <= $objstock->getStockentrepot())
    
    {
        $objstock->setStockMagasin($objstock->getStockMagasin()+$stock);
        $objstock->setStockentrepot($objstock->getStockentrepot()-$stock);
        $em = $this->getDoctrine()->getManager();
        $em->persist($objstock);
        $em->flush();
        
    }
    
    $resultat=$this->getDoctrine()->getRepository(Stock::class)->findBy(array('id'=>$id_stock));
    $objstock=$resultat['0'];

    
    $result=[];
    $result['magasin']=$objstock->getStockMagasin();
    $result['Entrepot']=$objstock->getStockEntrepot();
   
    return new JsonResponse ($result);
}

function stockmagasin($stock){
    
    
    
}
}
?>
