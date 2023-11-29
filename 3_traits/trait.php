<?php
namespace Trait;
include "./2_interfaces/interface.php";

use Interface\Animal;

trait Runner {
	protected function run() {
		return "zzzztt...\n";
	}
}

trait Swimmer {
	protected function swim() {
		return "plush plush\n";
	}
}

class Chicken implements Animal {
	use Runner, Swimmer;

	public function makeSound() {
		return "có-cocó\n";
	}
	
	public function eatSnacks(array $snacks) {
		return "puf!\n";
	}

	public function perambulate() {
		return $this->run() . $this->swim();
	}
}

echo (new Chicken())->makeSound();
echo (new Chicken())->eatSnacks([]);
echo (new Chicken())->perambulate();
