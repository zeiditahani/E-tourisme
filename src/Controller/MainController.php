<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_test_homepage')]
   public function main() : Response
   {
       return $this->render('test/homepage.html.twig',[
       ]);
   }

 /*   #[Route('/blog', name: 'app_test_blog')]
    public function blog() : Response
    {
        return $this->render('test/blog.html.twig',[
            'msg' =>'hddddddd',
        ]);
    }*/
    #[Route('/contact', name:'app_test_contact')]
    public function contact() :Response
    {
        return $this->render('test/contact.html.twig' ,[
           'contact' => 'bnj',
        ]);
    }
    public function offer() :Response
    {
        //$offer = servie->
        return $this->render('test/offer.html.twig' ,[
            //'offer' =>$offer,
        ]);
    }
    /*
    #[Route('/login', name: 'app_admin_login')]
    public function login(EntityManagerInterface $manager) : Response
    {
        //$name = 'admin';
        //$password = 'admin';
        //$admin = new Admin();
        //$admin ->setName($name);
        //$admin ->setPassword($password);


        //$manager ->persist($admin);
        //$manager ->flush();
        return $this->render('admin/login.html.twig',[
          'admin' =>'hello World!',
        ]);
        //return new Response("<h1>hello</h1>");
    }*/
}