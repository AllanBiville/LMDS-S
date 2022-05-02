<?php

namespace App\Tests;

use App\Entity\Marque;
use App\Entity\Modele;
use PHPUnit\Framework\TestCase;

class ModeleTest extends TestCase
{ 
    public function testIsEmpty(): void
    {
        $modele = new Modele();
        $this->assertEmpty($modele->getId());
        $this->assertEmpty($modele->getNomModele());
        $this->assertEmpty($modele->getMarque());
    }
    public function testIsTrue(): void
    {
        $modele = new Modele();
        $marque = new Marque();
        $modele->setNomModele("Iphone");
        $modele->setMarque($marque);
        $this->assertTrue($modele->getNomModele() === "Iphone");
        $this->assertTrue($modele->getMarque() === $marque);
    }
    public function testIsFalse(): void
    {
        $modele = new Modele();
        $marque = new Marque();
        $modele->setNomModele("Iphone");
        $modele->setMarque($marque);
        $this->assertFalse($modele->getNomModele() === "False");
        $this->assertFalse($modele->getMarque() === False);
    }
}
