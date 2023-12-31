<?php

class Singleton {
	protected static $instance;

	public static function getInstance() {
		if (null === static::$instance) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	protected function __construct() {}

	private function __clone() {}

	private function __wakeup() {}
}

class SingletonChild extends Singleton {
	protected static $instance;	
}

/* Xdebug ? */ 
$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance()); // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Singleton::getInstance()); // bool(false)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)
