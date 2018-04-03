<?php
namespace App\Controller;

// Controlleur pour le panier avec les routes :
//     - categorie
//      -genre
//      -categorygenresexe
//      -categorygenre


use App\Entity\Image;
use App\Entity\Panier;
use App\Entity\Product;
use App\Entity\Review;
use App\Service\FileUploader;
use App\Service\PanierService;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Doctrine\DBAL\Driver\PDOException;
use Doctrine\ORM\Mapping\Id;



class CategoriesController extends Controller
{
    /**
     * @Route("products/category/{cat}", name="Produits_categorie")
     */
    
    function category(Request $request,$cat,PanierService $PanierService)
    {
        
        
        $iduser= $this->getUser();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
        //variable commune
        $param = [];
        $param = constante::variable($param);
        $param=constante::variableindex($param);
        $param['panier']=$panier;
        $param['total']=$total;
        
        
        $articles= $this->getDoctrine()
        ->getRepository(Product::class)
        ->categorie($cat);
        //variable de la page 
        $param['article']=$articles;
        
        return $this->render('products.php.twig',$param);
        
    }
    /**
     * @Route("products/{sexe}", name="Produits_genre")
     */
    
    function categorygenre(Request $request,$sexe,PanierService $PanierService)
    {
        
        
        $iduser= $this->getUser();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
        //variable commune
        $param = [];
        $param = constante::variable($param);
        $param=constante::variableindex($param);
        $param['panier']=$panier;
        $param['total']=$total;
        
        
        $articles= $this->getDoctrine()
        ->getRepository(Product::class)
        ->categoriegenre($sexe);
        //variable de la page
        $param['article']=$articles;
        
        return $this->render('products.php.twig',$param);
        
    }
    /**
     * @Route("products/clothing/{sexe}", name="Produits_clothing_genre")
     */
    
    function categorygenresexe(Request $request,$sexe,PanierService $PanierService)
    {
        
        
        $iduser= $this->getUser();
        $panier=$this-> getDoctrine()
        ->getRepository(Panier::class)
        ->findBy(array('user'=>$iduser));
        $total=$PanierService->total($panier);
        
        //variable commune
        $param = [];
        $param = constante::variable($param);
        $param=constante::variableindex($param);
        $param['panier']=$panier;
        $param['total']=$total;
        
        
        $articles= $this->getDoctrine()
        ->getRepository(Product::class)
        ->categoriegenrevetement($sexe);
        //variable de la page
        $param['article']=$articles;
        
        return $this->render('products.php.twig',$param);
        
    }
    
    }

?>