<?php

namespace App\Controller;

use App\Repository\ImageshikingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageshikingController extends AbstractController
{
    #[Route('/imageshiking', name: 'app_imageshiking')]
    public function index(ImageshikingRepository $imageshikingRepository): Response
    {
        return $this->render('imageshiking/index.html.twig', [
         'images'=>$imageshikingRepository->findAll(),
        ]);
    }
}
