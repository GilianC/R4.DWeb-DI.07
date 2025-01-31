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
    private ?string $imageDeLaBoite;
    private ?string $imageArriere;

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

    public function getImageDeLaBoite(): ?string
    {
        return $this->imageDeLaBoite;
    }

    public function setImageDeLaBoite(?string $imageDeLaBoite): void
    {
        $this->imageDeLaBoite = $imageDeLaBoite;
    }

    public function getImageArriere(): ?string
    {
        return $this->imageArriere;
    }

    public function setImageArriere(?string $imageArriere): void
    {
        $this->imageArriere = $imageArriere;
    }
}
