<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\LegoService;
use App\Repository\LegoRepository;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoRepository $legoRepository): Response
    {
        // Récupère toutes les entités Lego depuis la base de données
        $legos = $legoRepository->findAll();
    
        return $this->render('lego.html.twig', [
            'legos' => $legos,
        ]);
    }
    
    #[Route('/{collection}', name: 'filter_by_collection')]
    public function filter(string $collection, LegoRepository $legoRepository): Response
    {
        $legos = $legoRepository->findBy(['collection' => $collection]);
    
        return $this->render('lego.html.twig', [
            'legos' => $legos,
        ]);
    }

}
