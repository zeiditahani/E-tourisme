<?php

namespace App\Controller\frontend;

use App\Repository\BlogRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog',methods: 'GET')]
    public function listBlog(OfferService $offerService): Response
    {
        return $this->render('blog/index.html.twig', [
            'data' => json_decode($offerService->getBlog()),

        ]);
    }

    #[Route('/widget', name: 'app_widget',methods: 'GET')]
    public function widget(OfferService $offerService): Response
    {
        return $this->render('blog/widget.html.twig', [
            'data' => json_decode($offerService->getLimitedListBlog(5)),

        ]);
    }



    #[Route('/detailBlog/{id_blog}', name: 'app_detailBlog',methods: 'GET')]
    public function detailBlog(OfferService $offerService): Response
    {
        return $this->render('blog/detailBlog.html.twig', [
            'data' => json_decode($offerService->getDetailBlog(2)),

        ]);
    }

}
