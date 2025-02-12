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
        $legos = $legoService->getLegos();
        return $this->render('lego.html.twig', [
            'legos' => $legos,
        ]);
    }

    #[Route('/{collection}', name: 'filter_by_collection')]
    public function filter(string $collection, LegoService $legoService): Response
    {
        $legos = $legoService->getLegoByCategory($collection);
        return $this->render('lego.html.twig', [
            'legos' => $legos,
        ]);
    }

}
