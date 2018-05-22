<?php
namespace Sith;

/**
* @Simple
*/
class Simple
{
	// @Var
	protected  $test;

	
	/**
	 * @return String
	*/	
	public function get() : String
	{
		return $this->test;
	}

	/**
	* @return void
	*/
	public function set($test) : Void
	{
		$this->test = $test; 
	}
}