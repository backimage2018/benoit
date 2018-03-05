<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

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
        $em = $this->getDoctrine()->getManager();
        $em->persist($Review);
        $em->flush();
        return $this->json($Review->getNom());
        
    }


}
?>