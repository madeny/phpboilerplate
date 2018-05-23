<?php
namespace Sith;

/**
* @Simple
*/
class Simple
{
	
	protected  $test;

	
	/**
	 * @return String
	*/	
	public function get() : String
	{
		return $this->test;
	}

	/**
	 * @var $test
	* @return void
	*/
	public function set($test) : Void
	{
		$this->test = $test; 
	}
}