<?php

namespace App\Tests;

use App\Entity\Produits;
use PHPUnit\Framework\TestCase;

class ProduitsTest extends TestCase
{
    private $id;
    private $marque;
    private $modele;
    private $description;
    private $prix;
    private $image;
    private $ancienPrix;
    private $stockage;
    private $ecran;
    private $Couleur;
    public function testIsEmpty(): void
    {
        $produits = new Produits();
        $this->assertEmpty($produits->getId());
        $this->assertEmpty($produits->getMarque());
        $this->assertEmpty($produits->getModele());
        $this->assertEmpty($produits->getDescription());
        $this->assertEmpty($produits->getPrix());
        $this->assertEmpty($produits->getImage());
        $this->assertEmpty($produits->getAncienPrix());
        $this->assertEmpty($produits->getStockage());
        $this->assertEmpty($produits->getEcran());
        $this->assertEmpty($produits->getCouleur());
    }
    public function testIsTrue(): void
    {
        $produits = new Produits();
        $produits->setMarque("Apple");
        $produits->setModele("Iphone");
        $produits->setDescription("Téléphone de qualité !");
        $produits->setPrix("1299");
        $produits->setImage("image4.png");
        $produits->setAncienPrix("1400");
        $produits->setStockage("64");
        $produits->setEcran("6.7");
        $produits->setCouleur("Blanc");
        $this->assertTrue($produits->getMarque() === "Apple");
        $this->assertTrue($produits->getModele() === "Iphone");
        $this->assertTrue($produits->getDescription() === "Téléphone de qualité !");
        $this->assertTrue($produits->getPrix() === "1299");
        $this->assertTrue($produits->getImage() === "image4.png");
        $this->assertTrue($produits->getAncienPrix() === "1400");
        $this->assertTrue($produits->getStockage() === "64");
        $this->assertTrue($produits->getEcran() === "6.7");
        $this->assertTrue($produits->getCouleur() === "Blanc");
    }
    public function testIsFalse(): void
    {
        $produits = new Produits();
        $produits->setMarque("Apple");
        $produits->setModele("Iphone");
        $produits->setDescription("Téléphone de qualité !");
        $produits->setPrix("1299");
        $produits->setImage("image4.png");
        $produits->setAncienPrix("1400");
        $produits->setStockage("64");
        $produits->setEcran("6.7");
        $produits->setCouleur("Blanc");
        $this->assertFalse($produits->getMarque() === "False");
        $this->assertFalse($produits->getModele() === "False");
        $this->assertFalse($produits->getDescription() === "False");
        $this->assertFalse($produits->getPrix() === False);
        $this->assertFalse($produits->getImage() === "False");
        $this->assertFalse($produits->getAncienPrix() === False);
        $this->assertFalse($produits->getStockage() === False);
        $this->assertFalse($produits->getEcran() === False);
        $this->assertFalse($produits->getCouleur() === "False");
    }
}
