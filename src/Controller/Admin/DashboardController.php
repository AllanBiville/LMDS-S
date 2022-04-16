<?php

namespace App\Controller\Admin;

use App\Entity\Devis;
use App\Controller\Admin\DevisCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
        // $routeBuilder = $this->get(AdminUrlGenerator::class);

        // return $this->redirect($routeBuilder->setController(DevisCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('LMDS S');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Panel Admin', 'fa fa-home');
        yield MenuItem::linktoRoute('Retourner sur le site', 'fas fa-home', 'home');
        yield MenuItem::linkToCrud('Devis', 'fas fa-map-marker-alt', Devis::class);
    }
}
