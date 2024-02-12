<?php

namespace App\Controller\Admin;

use App\Entity\Agency;
use App\Entity\Banner;
use App\Entity\Blog;
use App\Entity\Cruise;
use App\Entity\Excursion;
use App\Entity\GoodAdress;
use App\Entity\Hiking;
use App\Entity\Hotel;
use App\Entity\Region;
use App\Entity\Travel;
use App\Entity\Umrah;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    //#[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();
        return  $this->render('admin/index.html.twig');
        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SymfonyApp');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Agency','fa fa-building-o', Agency::class);
        yield MenuItem::linkToCrud('Banner', 'fa fa-picture-o', Banner::class);
        yield MenuItem::linkToCrud('Blog', 'fa-solid fa-blog', Blog::class);
        yield MenuItem::linkToCrud('GoodAdress','fa-solid fa-location-dot', GoodAdress::class);
        yield MenuItem::linkToCrud('Hotel', 'fa-solid fa-hotel ', Hotel::class);
        yield MenuItem::linkToCrud('User', 'fa-solid fa-user', User::class);
        yield MenuItem::linkToCrud('Cruise','fa-solid fa-ship', Cruise::class);
        yield MenuItem::linkToCrud('Excursion', 'fas fa-bus-alt',Excursion::class);
        yield MenuItem::linkToCrud('Umrah', 'fas fa-kaaba	',Umrah::class);
        yield MenuItem::linkToCrud('Travel', 'fas fa-plane',Travel::class);
        yield MenuItem::linkToCrud('Region', 'fas fa-map-marked-alt	',Region::class);
        yield MenuItem::linkToCrud('Hiking', 'fas fa-hiking	',Hiking::class);



        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
