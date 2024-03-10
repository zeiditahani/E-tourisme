<?php

namespace App\Controller\frontend;

use App\Repository\HotelRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Process\Process;

class HotelController extends AbstractController
{

    #[Route('/hotel', name: 'app_hotel',methods: 'GET')]

   public function hotel(HotelRepository $hotelRepository): Response
   {
       return $this->render('hotel/index.html.twig', [
           'data' => $hotelRepository->findAll(),

       ]);
   }
    public function limitedHotel(HotelRepository $hotelRepository): Response
    {
        return $this->render('hotel/limitedHotel.html.twig', [
            'data' => $hotelRepository->findAll(),

        ]);
    }
}
