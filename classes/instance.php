<?php

class instance {

	public $key;

	function __construct() {

		$this->key = $this->generateNewKey();

	}

	private function generateNewKey( $length = 4 ) {

		$key = 0;
	    $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

	    for($i = 0; $i < $length; $i++)
	        $key .= $pool[mt_rand(0, count($pool) - 1)];
	    
	    return $key;

	}

}