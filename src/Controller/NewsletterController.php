<?php

/* Controlleur pour le panier avec les routes :
 -newsletter
 -delete newsletter
 
 */
namespace App\Controller;

use App\Entity\Newsletter;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;

class NewsletterController extends Controller
{
    
    /**
     * @Route("/newsletter/delete/{id}", name="Newsletter1")
     */
    Public function deleted($id) {
        
        $this->container->get("doctrine.orm.default_entity_manager")->getFilters()->disable("deleted");
        $Newsletter=$this-> getDoctrine()
        ->getRepository(Newsletter::class)
        ->findOneBy(array('id' => $id));

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($Newsletter);
        $em->flush();
        
        return New Response ("deleted");
    }
    
    /**
     * @Route("/newsletter", name="Newsletter")
     */
    public function newsletter(Request $request)
    {
        // 1) build the form
        dump($request);
        $email = $request->request->get('email');
        dump($email);
        $Newsletter = new Newsletter();
        $Newsletter->setEmail($email);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($Newsletter);
        $em->flush();
        return $this->json($Newsletter->getEmail());
        
    }
    

}

?>