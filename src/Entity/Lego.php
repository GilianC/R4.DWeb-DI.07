<?php
namespace App\Entity;
class Lego
{
    private int $identifiant;
    private string $nom;
    private string $collection;
    private ?string $description;
    private ?float $prix;
    private ?int $pieces;
    private ?string $boxImage;
    private ?string $legoImage;

    public function __construct(int $identifiant, string $nom, string $collection)
    {
        $this->identifiant = $identifiant;
        $this->nom = $nom;
        $this->collection = $collection;
    }

    public function getIdentifiant(): int
    {
        return $this->identifiant;
    }

    public function setIdentifiant(int $identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCollection(): string
    {
        return $this->collection;
    }

    public function setCollection(string $collection): void
    {
        $this->collection = $collection;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): void
    {
        $this->prix = $prix;
    }

    public function getPieces(): ?int
    {
        return $this->pieces;
    }

    public function setPieces(?int $pieces): void
    {
        $this->pieces = $pieces;
    }

    public function getBoxImage(): ?string
    {
        return $this->boxImage;
    }

    public function setBoxImage(?string $boxImage): void
    {
        $this->boxImage = $boxImage;
    }

    public function getImageArriere(): ?string
    {
        return $this->legoImage;
    }

    public function setImageArriere(?string $legoImage): void
    {
        $this->legoImage = $legoImage;
    }
}
