<?php

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
     * @Route("/newsletter", name="Newsletter")
     */
    public function newsletter(Request $request)
    {
        // 1) build the form
        $email = $request->request->get('email');
        $Newsletter = new Newsletter();
        $Newsletter->setEmail($email);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($Newsletter);
        $em->flush();
        return $this->json($Newsletter->getEmail());
        
    }
}

?>