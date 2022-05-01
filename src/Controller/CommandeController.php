<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    #[Route('/liste_commande', name: 'app_commande')]
    public function showCommande(): Response
    {
        return $this->render('commande/liste_commande.html.twig', [
        ]);
    }

    #[Route('/produit', name: 'app_commande')]
    public function showProduit(): Response
    {
        return $this->render('commande/produit.html.twig', [
        ]);
    }
}
