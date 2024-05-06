<?php

namespace App\Controller;

use App\Repository\ImagesCruiseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImagescruiseController extends AbstractController
{
    #[Route('/imagescruise', name: 'app_imagescruise')]
    public function index(ImagesCruiseRepository $imagesCruiseRepository): Response
    {
        return $this->render('imagescruise/index.html.twig', [
            'data' => $imagesCruiseRepository->findAll(),
        ]);
    }
}
