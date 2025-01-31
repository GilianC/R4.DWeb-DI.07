<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        $lego = [
            'id' => 1,
            'name' => 'Brick',
            'color' => 'Red',
            'boxImage' => '/images/brick.jpg',
            'collection' => 'Star Wars',
            'description' => 'This is a brick',
            'price' => 10.99,
            'pieces' => 100,
            'backImage' => '/images/brick-back.jpg',
            'legoImage' => '/images/lego.jpg',
        ];

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
