<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/tests', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'data'=> 898978656789
        ]);
    }
    #[Route('/href', name: 'aaa')]
    public function test(): Response
    {
        return $this->render('test/href.html.twig', [
            'controller_name' => 'TestController',
            'data'=> 898978656789
        ]);
    }
}

