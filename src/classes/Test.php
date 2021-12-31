<?php
namespace src\classes;
use src\classes\Test2;

class Test extends Test2
{
    public $echo_test;
    
    public function __construct() {
		$this->echo_test = $this->echo_test();
	}
    
    public function echo_test() {
        echo 'Class: '.$this->return_ok();
    }
}