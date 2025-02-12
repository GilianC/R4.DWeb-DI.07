<?php

// Là ou la classe est déclarée (où son fichier se trouve)
namespace App\Service;

use App\Entity\Lego;
use PDO;

class LegoService
{
    private PDO $pdo; // PDO instance

    public function __construct()
    {
        $cnx = 'mysql:host=tp-symfony-mysql;dbname=lego_store';
        $this->pdo = new PDO($cnx, 'root', 'root');
        
    }
    public function getLegos(): array
    {
        $query = $this->pdo->prepare('SELECT * FROM lego');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $legos = [];
        
        foreach ($results as $stat) {
            $lego = new Lego($stat['id'], $stat['name'], $stat['collection']);
            $lego->setDescription($stat['description']);
            $lego->setPrice($stat['price']);
            $lego->setPieces($stat['pieces']);
            $lego->setBoxImage($stat['imagebox']);
            $lego->setLegoImage($stat['imagebg']);
            $legos[] = $lego;
        }
        return $legos;
    }
    public function getLegoByCategory($category): array{
        $query = $this->pdo->prepare('SELECT * FROM lego WHERE collection = :category');
        $query->execute([':category' =>$category]);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $legos = [];

        foreach ($results as $stat) {
            $lego = new Lego($stat['id'], $stat['name'], $stat['collection']);
            $lego->setDescription($stat['description']);
            $lego->setPrice($stat['price']);
            $lego->setPieces($stat['pieces']);
            $lego->setBoxImage($stat['imagebox']);
            $lego->setLegoImage($stat['imagebg']);
            $legos[] = $lego;
        }

        return $legos;

    }
}