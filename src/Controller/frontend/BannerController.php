<?php

namespace App\Controller\frontend;

use App\Repository\AgencyRepository;
use App\Repository\BannerRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController extends AbstractController

{
   #[Route('/banner', name: 'app_banner',methods: 'GET')]
    public function index(OfferService $offerService): Response
    {
        return $this->render('banner/index.html.twig', [
            'data' => json_decode($offerService->getBanner()),

        ]);
    }
}
