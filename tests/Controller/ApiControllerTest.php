<?php declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{

    public function testSortedArray()
    {
        $jsonData = json_encode(['array' => ['katze', 'chien', 'abba', 'kann']]);
        $jsonResponse = json_encode(["abba","katze","chien","kann"]);
        $client = static::createClient();
        $client->request('POST', '/sort',[],[],[], $jsonData);
        $this->assertEquals($jsonResponse, $client->getResponse()->getContent());
    }
}