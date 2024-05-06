<?php

namespace App\Controller\frontend;

use App\Entity\Umrah;

use App\Repository\ImagesRepository;
use App\Repository\UmrahRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UmrahController extends AbstractController
{
    #[Route('/umrah', name: 'app_umrah',methods: 'GET')]
    public function index(UmrahRepository $umrahRepository): Response
    {
       
        return $this->render('umrah/index.html.twig', [
            'umrahs' =>$umrahRepository->findAll(),

        ]);
    }
    #[Route('/umrah{id_umrah}', name: 'app_detail_umrah',methods: 'GET')]
    public function detailUmrah(UmrahRepository $umrahRepository, int $id_umrah): Response
    {   
        $umrah = $umrahRepository->find($id_umrah);
        return $this->render('umrah/detailUmrah.html.twig', [
            'umrah' => $umrah,

        ]);
    }
    public function limitedUmrah(UmrahRepository $umrahRepository): Response
    {
        $umrah = $umrahRepository->findByExampleField();
        return $this->render('umrah/limitedUmrah.html.twig', [
            'data' => $umrah,

        ]);
    }
   
}
