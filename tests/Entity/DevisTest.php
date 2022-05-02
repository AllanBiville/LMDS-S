<?php

namespace App\Tests;

use App\Entity\Devis;
use DateTime;
use PHPUnit\Framework\TestCase;

class DevisTest extends TestCase
{
    public function testIsEmpty(): void
    {
        $devis = new Devis();
        $this->assertEmpty($devis->getId());
        $this->assertEmpty($devis->getStatus());
        $this->assertEmpty($devis->getDate());
        $this->assertEmpty($devis->getNom());
        $this->assertEmpty($devis->getPrenom());
        $this->assertEmpty($devis->getEmail());
        $this->assertEmpty($devis->getTelephone());
        $this->assertEmpty($devis->getMarque());
        $this->assertEmpty($devis->getModele());
        $this->assertEmpty($devis->getProbleme());
        $this->assertEmpty($devis->getCommentaire());
        $this->assertEmpty($devis->getProtection());
    }
    public function testIsTrue(): void
    {
        $devis = new Devis();
        $devis->setStatus("Nouveau");
        $devis->setNom("Php");
        $devis->setPrenom("Unit");
        $devis->setEmail("PhpUnit@gmail.com");
        $devis->setTelephone("0605040302");
        $devis->setMarque("Apple");
        $devis->setModele("Iphone");
        $devis->setProbleme("Ecran HS");
        $devis->setCommentaire("Non");
        $devis->setProtection("Oui");
        $this->assertTrue($devis->getStatus() === "Nouveau");
        $this->assertTrue($devis->getNom() === "Php");
        $this->assertTrue($devis->getPrenom() === "Unit");
        $this->assertTrue($devis->getEmail() === "PhpUnit@gmail.com");
        $this->assertTrue($devis->getTelephone() === "0605040302");
        $this->assertTrue($devis->getMarque() === "Apple");
        $this->assertTrue($devis->getModele() === "Iphone");
        $this->assertTrue($devis->getProbleme() === "Ecran HS");
        $this->assertTrue($devis->getCommentaire() === "Non");
        $this->assertTrue($devis->getProtection() === "Oui");
    }
    public function testIsFalse(): void
    {
        $devis = new Devis();
        $devis->setStatus("Nouveau");
        $devis->setNom("Php");
        $devis->setPrenom("Unit");
        $devis->setEmail("PhpUnit@gmail.com");
        $devis->setTelephone("0605040302");
        $devis->setMarque("Apple");
        $devis->setModele("Iphone");
        $devis->setProbleme("Ecran HS");
        $devis->setCommentaire("Non");
        $devis->setProtection("Oui");
        $this->assertFalse($devis->getStatus() === "False");
        $this->assertFalse($devis->getNom() === "False");
        $this->assertFalse($devis->getPrenom() === "False");
        $this->assertFalse($devis->getEmail() === "False");
        $this->assertFalse($devis->getTelephone() === "False");
        $this->assertFalse($devis->getMarque() === "False");
        $this->assertFalse($devis->getModele() === "False");
        $this->assertFalse($devis->getProbleme() === "False");
        $this->assertFalse($devis->getCommentaire() === "False");
        $this->assertFalse($devis->getProtection() === "False");
    }
}
