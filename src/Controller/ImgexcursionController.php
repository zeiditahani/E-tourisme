<?php

namespace App\Controller;

use App\Repository\ImgexcursionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImgexcursionController extends AbstractController
{
    #[Route('/imgexcursion', name: 'app_imgexcursion')]
    public function index(ImgexcursionRepository $imgexcursionRepository): Response
    {
        return $this->render('imgexcursion/index.html.twig', [
            'images' => $imgexcursionRepository->findAll(),
        ]);
    }
}
