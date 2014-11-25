<?php

namespace Komodo\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KomodoDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     * @Route("/search/{text}",  name="komodo_demo_search")
     * @Method("GET")
     */
    public function search($text)
    {
        $products = ['002' => "Refresco coca cola", "003" => "Ref. pepsi cola"];
        
        $productsHtml = "<div> 002 - {$products['002']} </div><div> 003 - {$products['003']} </div>";
        
        return new Response(json_encode(['data' => $products, "dataAsHtml" => $productsHtml]));
    }
}
