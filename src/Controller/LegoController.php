<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\LegoService;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoService $legoService): Response
    {
        $lego = $legoService->getLego();

        

        return $this->render('lego.html.twig', [
            'lego' => $lego,
        ]);
    }

    #[Route('/yo', name: 'yo')]
    public function yo()
    {
        die("C'est moi le boss.");
    }
}
