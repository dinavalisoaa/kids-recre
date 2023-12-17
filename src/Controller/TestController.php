<?php

namespace App\Controller;

use App\Entity\Laptop;
use App\Entity\Personnel;
use App\Entity\Ram;
use App\Form\Type\PersonnelType;
use App\Repository\RamRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;




class TestController extends AbstractController
{
    
    #[Route('/test/new', name: 'test_new')]

    public function new(EntityManagerInterface $em, Request $request)
    {
        // creates a task object and initializes some data for this example
        $task = new Personnel();
        // $task->setNom("in"); 
        // $task->setAdresse
               // $task->setTask('Write a blog post');
        // $task->setDueDate(new \DateTimeImmutable('tomorrow'));

        $form = $this->createForm(PersonnelType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            // dd($article);
            // $article->setAuthor($this->getUser());
            $em->persist($article);
            $em->flush();
            // $this->addFlash('success', 'Article Created! Knowledge is power!');
            return $this->redirectToRoute('form');
        }

        return $this->render('test/form.html.twig', [
           'form'=>$form->createView(),
        ]);
    }

    #[Route('/form', name: 'form')]
    public function index(): Response
    {
        return $this->render('test/form.html.twig', [
           
        ]);
    }
    #[Route('/list', name: 'liste')]
    public function listeProject(EntityManagerInterface $entityManager): Response
    {
        $product = new Ram();
        $val=$entityManager->getRepository(Ram::class)->findAll();  
         return $this->render('test/liste.html.twig', [
            'controller_name' => 'TestController',
            'data'=> 898978656789,
            'liste'=> $val
        ]);
    }
//     #[Route('/product', name: 'create_product')]
//     public function createProductY(EntityManagerInterface $entityManager): Response
//     {
//         $product = new Ram();
//         $product->setLastdatetime(new \DateTime('now'));
//         $product->setLastUpdate(new \DateTime('now'));
//         $product->setTyperamid(1);
//         $product->setCapacite(696);
//         // $product-

//         // tell Doctrine you want to (eventually) save the Product (no queries yet)
//         $entityManager->persist($product);

//         // actually executes the queries (i.e. the INSERT query)
//         $entityManager->flush();
// // return;
//         return new Response('Saved new product with id '.$product->getId());
//     }
}

