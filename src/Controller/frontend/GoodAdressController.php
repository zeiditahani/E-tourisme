<?php

namespace App\Controller\frontend;

use App\Repository\GoodAdressRepository;
use App\Entity\GoodAdress;
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
    public function limitedGoodAddress(GoodAdressRepository $goodAdressRepository): Response
    {
        $good = $goodAdressRepository -> findByExampleField();
        return $this->render('good_adress/limitedGoodAddress.html.twig', [
            'data' => $good,

        ]);
    }
    #[Route('/good{id_address}', name: 'app_good_adress', methods: ['GET'])]
    public function detailGoodAddress(int $id_address, GoodAdressRepository $goodAdressRepository): Response
    {
        $goodAdress = $goodAdressRepository->find($id_address);
    
        // Vérifiez si l'adresse est trouvée
        if (!$goodAdress) {
            throw $this->createNotFoundException('Good address not found');
        }
    
        return $this->render('good_adress/detailGoodAddress.html.twig', [
            'goodAdress' => $goodAdress,
        ]);
    }
    
    

}
