<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Sith\Simple;

class SimpleTest extends TestCase {

	/** @test */
	public function simpletestTest(){

		$this->assertTrue(true);
	} 

	/** @test */
	public function it_can_instanciate_Simple_class()
	{
	    $this->assertInstanceOf(Simple::class, (new Simple())); 
	}

	/** @test */
	public function it_can_set_and_return_value()
	{
	    $simple = new Simple();

	    $simple->set("I'm a simple class");

	    $this->assertEquals("I'm a simple class", $simple->get()); 
	}
}

