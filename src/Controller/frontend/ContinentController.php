<?php

namespace App\Controller\frontend;

use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    #[Route('/continent', name: 'app_continent')]
    public function index(): Response
    {
        return $this->render('continent/index.html.twig', [
            
        ]);
    }

}

