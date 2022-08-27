<?php

namespace App\Controller;

use App\Entity\Circle;
use App\Entity\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShapeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request): Response
    {
        $response = new Response('Welcome');
       
        return $response;
    }
    
    /**
    * @Route("/triangle/{a}/{b}/{c}/", name="triangle")
    */
    public function triangle(Request $request): Response
    {
        $shape = new Triangle($request->get('a'), $request->get('b'), $request->get('c'));
        
        return new JsonResponse($shape->getProperties());        
    }
    
    /**
    * @Route("/circle/{radius}/", name="circle")
    */
    public function circle(Request $request): Response
    {
        $shape = new Circle($request->get('radius'));
        
        return new JsonResponse($shape->getProperties());
    }
}
