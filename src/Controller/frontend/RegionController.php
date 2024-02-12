<?php

namespace App\Controller\frontend;

use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegionController extends AbstractController
{
    #[Route('/region', name: 'app_region')]
    public function index(OfferService $offerService): Response
    {
        return $this->render('test/region.html.twig', [
            'region' => json_decode($offerService->getRegion()),
        ]);
    }
}
