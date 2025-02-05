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
    public function getLego(): Lego
    {
        $query = $this->pdo->prepare('SELECT * FROM lego WHERE id = :id');
        $query->execute(['id' => 1]);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $legos = null;
        foreach ($results as $stat) {
            $lego = new Lego($stat['id'], $stat['nom'], $stat['collection']);
            $lego->setDescription($stat['description']);
            $lego->setPrix($stat['prix']);
            $lego->setPieces($stat['pieces']);
            $lego->setBoxImage($stat['imagebox']);
            $lego->setImageArriere($stat['imagebg']);
            $legos[]= $lego;
            break;
        }
    
        return $legos ?? new Lego(0, 'Undefined', 'Undefined');
            }


        


    }
