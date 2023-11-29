<?php
namespace Interface;
include "logger.php";

use Countable;
use Log\Logger;

interface Animal {
	public function makeSound();
	public function eatSnacks(array $snacks);
}

class Cat implements Animal, Logger, Countable {
	public function makeSound() {
		return "meow\n";
	}
	
	public function eatSnacks(array $snacks) {
		return "puf!\n";
	}

	public function log($message) {
		return $message . "\n";
	}

	public function count(): int {
		return 2048;
	}
}

echo (new Cat())->makeSound();
echo (new Cat())->eatSnacks([]);
echo (new Cat())->log("interfaces are awesome");
echo (new Cat())->count() . "\n";
