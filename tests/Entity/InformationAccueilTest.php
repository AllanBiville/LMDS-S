<?php

namespace App\Tests;

use App\Entity\InformationAccueil;
use PHPUnit\Framework\TestCase;

class InformationAccueilTest extends TestCase
{
    private $id;

    private $emplacement;


    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $texte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;
    public function testIsEmpty(): void
    {
        $information = new InformationAccueil();
        $this->assertEmpty($information->getId());
        $this->assertEmpty($information->getEmplacement());
        $this->assertEmpty($information->getTitre());
        $this->assertEmpty($information->getTexte());
        $this->assertEmpty($information->getLogo());
    }
    public function testIsTrue(): void
    {
        $information = new InformationAccueil();
        $information->setEmplacement("1");
        $information->setTitre("Titre");
        $information->setTexte("Texte");
        $information->setLogo("logo.png");
        $this->assertTrue($information->getEmplacement() === "1");
        $this->assertTrue($information->getTitre() === "Titre");
        $this->assertTrue($information->getTexte() === "Texte");
        $this->assertTrue($information->getLogo() === "logo.png");
    }
    public function testIsFalse(): void
    {
        $information = new InformationAccueil();
        $information->setEmplacement("1");
        $information->setTitre("Titre");
        $information->setTexte("Texte");
        $information->setLogo("logo.png");
        $this->assertFalse($information->getEmplacement() === "False");
        $this->assertFalse($information->getTitre() === "False");
        $this->assertFalse($information->getTexte() === "False");
        $this->assertFalse($information->getLogo() === "False");
    }
}
