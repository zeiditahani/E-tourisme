<?php

namespace App\Controller\frontend;

use App\Entity\Cruise;
use App\Repository\CruiseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CruiseController extends AbstractController
{
    #[Route('/cruise', name: 'app_cruise',methods: 'GET')]
    public function cruise(CruiseRepository $cruiseRepository): Response
    {
        return $this->render('cruise/index.html.twig', [
            'data' => $cruiseRepository->findAll(),

        ]);
    }
    //#[Route('/limited-cruise/{fieldValue}', name: 'app_limited_cruise', methods: 'GET')]
    public function limitedCruise( CruiseRepository $cruiseRepository):Response
    {
        $cruise = $cruiseRepository->findByExampleField();
        return $this->render('cruise/limitedCruise.html.twig', [
            'data' => $cruise,
        ]);
    }


    #[Route('/cruise{id_cruise} ', name: 'app_detailCruise',methods: 'GET')]
    public function detailCruise( int $id_cruise, CruiseRepository $cruiseRepository ): Response
    {
        $cruise = $cruiseRepository->find($id_cruise);

        if(!$cruise){
            throw $this->createNotFoundException('cruise not found');
        }
        return $this->render('cruise/detailCruise.html.twig', [
             'cruise' => $cruise,
           
        ]);
    }
    
}
