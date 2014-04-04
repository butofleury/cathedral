<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App {
/*
App library. Should contains application functionality globally accessible by all app modules
*/

	private $CI;
	
	public function __construct() {
	
		$this->CI = &get_instance();
		 
	}
	
	
}