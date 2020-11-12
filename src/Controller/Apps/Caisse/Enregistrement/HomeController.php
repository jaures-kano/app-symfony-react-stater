<?php

namespace App\Controller\Apps\Caisse\Enregistrement;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="index", priority="-1", defaults={"reactRouting": null}, requirements={"reactRouting"=".+"})
     */
    public function index(): Response
    {
        return $this->render('apps/caisse/enregistrement/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
