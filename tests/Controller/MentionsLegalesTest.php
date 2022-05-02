<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MentionsLegalesTest extends WebTestCase
{
    public function testMentionsLegalesRoute(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/mentions_legales');
        $this->assertResponseIsSuccessful();

        $this->assertPageTitleContains('La Maison du Smartphone');

        $this->assertSelectorExists('h1:contains("Mentions Legales")');

    }
}
