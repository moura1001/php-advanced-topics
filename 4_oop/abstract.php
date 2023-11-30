<?php

abstract class Fruit {
	abstract public function getCalories(): int;

	abstract public function getColour(): string;

	public function eat() {
		return "chomp! chomp!\n";
	}
}

class Apple extends Fruit {
	public function getCalories(): int {
		return 52;
	}

	public function getColour(): string {
		return "green\n";
	}
}

class Orange extends Fruit {
	public function getCalories(): int {
		return 47;
	}

	public function getColour(): string {
		return "green\n";
	}
}

echo (new Apple())->getCalories() . "\n";
echo (new Apple())->getColour();
echo (new Apple())->eat();
echo (new Orange())->getCalories() . "\n";
echo (new Orange())->getColour();
echo (new Orange())->eat();
