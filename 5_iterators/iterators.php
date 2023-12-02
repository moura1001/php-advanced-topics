<?php

class BasicIterator extends IteratorIterator {
	public function __construct(string $pathToFile) {
		// These set up the inner SplFileObject's properties to process CSV
		$file = new SplFileObject($pathToFile, "r");
		$file->setFlags(SplFileObject::READ_CSV);
		$file->setCsvControl(",", "\"", "\\");

		// Call the parent constructor with an SplFileObject (also Traversable) for the given path
		parent::__construct($file);
	}
}

class FilterRows extends FilterIterator {
	public function accept(): bool {
		$current = $this->getInnerIterator()->current();
		if (count($current) > 1) {
			return true;
		}
		return false;
	}
}

$filePath = "./data.csv";
$iterator = new BasicIterator($filePath);
// stacking iterators
$iterator = new FilterRows($iterator);

foreach ($iterator as $i => $row) {
	var_dump($row);
}
