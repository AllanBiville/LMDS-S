<?php

namespace App\Tests;

use App\Entity\Phototheque;
use PHPUnit\Framework\TestCase;

class PhotothequeTest extends TestCase
{
    public function testIsEmpty(): void
    {
        $phototheque = new Phototheque();
        $this->assertEmpty($phototheque->getId());
        $this->assertEmpty($phototheque->getTitre());
        $this->assertEmpty($phototheque->getImage());
    }
    public function testIsTrue(): void
    {
        $phototheque = new Phototheque();
        $phototheque->setTitre("Image de la boutique");
        $phototheque->setImage("image2.jpg");
        $this->assertTrue($phototheque->getTitre() === "Image de la boutique");
        $this->assertTrue($phototheque->getImage() === "image2.jpg");
    }
    public function testIsFalse(): void
    {
        $phototheque = new Phototheque();
        $phototheque->setTitre("Image de la boutique");
        $phototheque->setImage("image2.jpg");
        $this->assertFalse($phototheque->getTitre() === "False");
        $this->assertFalse($phototheque->getImage() === "False");
    }
}
