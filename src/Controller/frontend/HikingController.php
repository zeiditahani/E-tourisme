<?php

namespace App\Controller\frontend;

use App\Entity\Hiking;
use App\Entity\Region;
use App\Repository\HikingRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HikingController extends AbstractController
{
    #[Route('/hiking', name: 'app_hiking',methods: 'GET')]
  public function hiking(HikingRepository $hikingRepository): Response
    {
      return $this->render('hiking/index.html.twig', [
          'data' => $hikingRepository->findAll(),

      ]);
    }
    public function limitedHiking(HikingRepository $hikingRepository): Response
    {
        return $this->render('hiking/limitedHiking.html.twig', [
              'data' => $hikingRepository->findAll(),
        ]);
    }
    #[Route('/hiking{id}', name: 'app_detailHiking',methods: 'GET')]
    public function detailHiking(Hiking $hiking): Response
    {
        return $this->render('hiking/detailHiking.html.twig', [
              'hiking' => $hiking,
        ]);
    }
}
