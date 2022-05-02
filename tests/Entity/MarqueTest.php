<?php

namespace App\Tests;

use App\Entity\Marque;
use PHPUnit\Framework\TestCase;

class MarqueTest extends TestCase
{
    public function testIsEmpty(): void
    {
        $marque = new Marque();
        $this->assertEmpty($marque->getId());
        $this->assertEmpty($marque->getNomMarque());
        $this->assertEmpty($marque->getMarque());
    }
    public function testIsTrue(): void
    {
        $marque = new Marque();
        $marque->setNomMarque("Apple");
        $this->assertTrue($marque->getNomMarque() === "Apple");
    }
    public function testIsFalse(): void
    {
        $marque = new Marque();
        $marque->setNomMarque("Apple");
        $this->assertFalse($marque->getNomMarque() === "False");
    }
}
