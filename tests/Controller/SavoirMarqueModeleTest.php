<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SavoirMarqueModeleTest extends WebTestCase
{
    public function testMentionsLegalesRoute(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/SavoirMarqueModele');
        $this->assertResponseIsSuccessful();

        $this->assertPageTitleContains('La Maison du Smartphone');

        $this->assertSelectorExists('h1:contains("Comment savoir la marque ou le modèle de son téléphone ?")');

    }
    
}
