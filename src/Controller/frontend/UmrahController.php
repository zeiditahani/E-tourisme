<?php

namespace App\Controller\frontend;

use App\Entity\Umrah;
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
            'umrahs' => $umrahRepository->findAll(),

        ]);
    }
    #[Route('/umrah/{id_umrah}', name: 'app_detail_umrah',methods: 'GET')]
    public function detailUmrah(Umrah $umrah): Response
    {
        return $this->render('umrah/detailUmrah.html.twig', [
            'umrah' => $umrah,

        ]);
    }

}
