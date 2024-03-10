<?php

namespace App\Controller\frontend;

use App\Repository\GoodAdressRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoodAdressController extends AbstractController
{
    #[Route('/good', name: 'app_good_adress',methods: 'GET')]
    public function index(GoodAdressRepository $goodAdressRepository): Response
    {
        return $this->render('good_adress/index.html.twig', [
            'data' => $goodAdressRepository->findAll(),

        ]);
    }

}
