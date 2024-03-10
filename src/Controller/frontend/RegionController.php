<?php

namespace App\Controller\frontend;

use App\Repository\RegionRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegionController extends AbstractController
{
    #[Route('/region', name: 'app_region')]
    public function index(RegionRepository $regionRepository): Response
    {
        return $this->render('test/region.html.twig', [
            'data' => $regionRepository->findAll(),
        ]);
    }
}
