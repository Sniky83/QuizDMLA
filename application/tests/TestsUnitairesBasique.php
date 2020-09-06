<?php
declare(strict_types = 1);

require_once("../controllers/Quiz.php");

use PHPUnit\Framework\TestCase;

final class TestsUnitairesBasique extends TestCase
{
    public function testIndex()
	{
		$a = 1;
		$b = 2;
		$c = plus($a,$b);
        $this->assertEquals(3,$c,"Test d'addition");
    }
}
