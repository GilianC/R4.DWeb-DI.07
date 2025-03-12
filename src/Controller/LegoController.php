<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\LegoService;
use App\Repository\LegoRepository;
use Doctrine\ORM\EntityManagerInterface;
// use App\Repository\LegoCollection;
use App\Entity\LegoCollection;
class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoRepository $legoRepository, EntityManagerInterface $em): Response
    {
        // Récupère toutes les entités Lego depuis la base de données
        $legos = $legoRepository->findAll();
        // Récupère toutes les collections disponibles
        $collections = $em->getRepository(LegoCollection::class)->findAll();
    
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
        ]);
    }
    
    #[Route('/collection/{id}', name: 'filter_by_collection')]
    public function filter(int $id, LegoRepository $legoRepository, EntityManagerInterface $em): Response
    {
        // Récupère la collection par son identifiant
        $collection = $em->getRepository(LegoCollection::class)->find($id);
        if (!$collection) {
            throw $this->createNotFoundException("Collection non trouvée");
        }
        // Récupère les Legos associés à la collection
        $legos = $legoRepository->findBy(['legocollection' => $collection]);
        // Récupère l'ensemble des collections pour réafficher la nav
        $collections = $em->getRepository(LegoCollection::class)->findAll();
    
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
        ]);
    }
}