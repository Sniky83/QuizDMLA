<?php
declare(strict_types = 1);
require_once("../Controllers/Home.php");

use PHPUnit\Framework\TestCase;

final class TestsHomePage extends TestCase
{
    public function testIndex()
	{
        Home.index();
        $output = $this->request('GET', ['Home','index']);
        $expected = '<h4>Bienvenue dans notre Application</h4>';
        
        $this->assertContains($expected, $output);
    }
}
