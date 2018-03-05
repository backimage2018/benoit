<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ReviewController extends Controller
{
    /**
     * @Route("/review", name="Review")
     */
    public function Review(Request $request)
   
    {
        // 1) build the form
        
        $Review = new Review();
        $Review->setMail($request->get('email'));
        $Review->setNom($request->get('name'));
        $Review->setreview($request->get('review'));
        $Review->setNote($request->get('rating'));
        $id = $request->get('id');
        
        $Product=$this-> getDoctrine()
        ->getRepository(Product::class)
        ->find($id);

        

//         $Product= new Product();
//         $Product->setId($id);
//         $Review->setProduct($Product);
  
     
//         $em = $this->getDoctrine()->getManager();
//         $em->persist($Review);
//         $em->flush();
        
        return $this->json($Product);
        
    }


}
?>