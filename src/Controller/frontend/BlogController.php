<?php

namespace App\Controller\frontend;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use App\Service\OfferService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog',methods: 'GET')]
    public function listBlog(BlogRepository $blogRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'blog' => $blogRepository->findAll() ,

        ]);
    }

    #[Route('/widget', name: 'app_widget',methods: 'GET')]
    public function widget(BlogRepository $blogRepository): Response
    {
        return $this->render('blog/widget.html.twig', [
            'data' => $blogRepository->findAll() ,

        ]);
    }



    #[Route('/detailBlog/{id_blog}', name: 'app_detailBlog',methods: 'GET')]
    public function detailBlog(Blog $blog): Response
    {
        return $this->render('blog/detailBlog.html.twig', [
            'data' => $blog,

        ]);
    }
    

}
