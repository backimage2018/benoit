<?php


/* Controlleur pour le panier avec les routes :
 -dashboard

 */


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\Routing\Annotation\Route;

 Class AdminController extends Controller
{
    
    // Route vers dashboard
    /**
     * @Route("admin/dashboard", name="dashboard")
     */
    Public function dashboard(){
        

//     Variables

    $param=[];
   
    return $this->render('admin/dashboard.html.twig',$param);
}
}
?>
