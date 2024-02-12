<?php

namespace App\Controller;
use App\Entity\User;
//use App\Form\UserTypeUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $user = new User();
        //$form = $this->createForm(UserTypeUse)
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}

class NewUserController extends AbstractController
{
    #[Route('/newuser', name: 'new_user', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserTypeUser::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('new_user/index.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}