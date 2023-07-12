<?php

namespace App\Controller;

use App\Entity\Tableimage;
use App\Form\ImageType;
use App\Repository\TableimageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'page')]
    public function index(Request $request, EntityManagerInterface $manager,TableimageRepository $repo): Response
    {
        $table = new Tableimage;
        $form = $this->createForm(ImageType::class, $table);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($table);
            $manager->flush();
        }
        $images=$repo->findAll();
        return $this->render('page/page.html.twig', [
            'form' => $form->createView(),
            'images'=>$images
        ]);
    }
}
