<?php

namespace App\Tests;

use App\Entity\FontAwesome;
use PHPUnit\Framework\TestCase;

class FontAwesomeTest extends TestCase
{
    public function testIsEmpty(): void
    {
        $fontawesome = new FontAwesome();
        $this->assertEmpty($fontawesome->getId());
        $this->assertEmpty($fontawesome->getNom());
    }
    public function testIsTrue(): void
    {
        $fontawesome = new FontAwesome();
        $fontawesome->setNom("Logo");
        $this->assertTrue($fontawesome->getNom() === "Logo");
    }
    public function testIsFalse(): void
    {
        $fontawesome = new FontAwesome();
        $fontawesome->setNom("Logo");
        $this->assertFalse($fontawesome->getNom() === "False");
    }
}