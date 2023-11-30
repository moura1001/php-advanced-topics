<?php

class Database {
	public function __construct($param) {
		echo "{$param}\n";
	}

	public function __destruct() {
		echo "destruct\n";
	}
}

$obj = new Database("construct");
