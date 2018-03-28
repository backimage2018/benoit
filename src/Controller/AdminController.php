<?php


/* Controlleur pour le panier avec les routes :
 -dashboard

 */


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Image;
use App\Entity\Product;
use App\Form\ProductType;
use App\Service\FileUploader;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
    
 Class AdminController extends Controller
{
    
    // Route vers dashboard
    /**
     * @Route("admin/dashboard", name="dashboard")
     */
    Public function dashboard(Request $request,FileUploader $fileUploader){
        



// requetes pour liste d'articles ($articles)
        $articles=$this-> getDoctrine()
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
    $param['article'] = $articles;
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
    $articles=$this-> getDoctrine()
    ->getRepository(Product::class)
    ->findAll();
    
    //     Variables
    $param=[];
    $param['article'] = $articles;
    return $this->render('admin/Entrepot.html.twig',$param);
}
// Route vers Magasin
/**
 * @Route("admin/magasin", name="magasin")
 */
Public function magasin(Request $request){
    
    // requetes pour liste d'articles ($articles)
    $articles=$this-> getDoctrine()
    ->getRepository(Product::class)
    ->findAll();
    
    //     Variables
    $param=[];
    $param['article'] = $articles;
    return $this->render('admin/magasin.html.twig',$param);
}
}
?>
