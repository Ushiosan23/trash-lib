<?php

namespace ushiosan23\IO;

use InvalidArgumentException;

final class Directory {

	use Resource;

	public function __construct(string $location) {
		if (!is_dir($location)) throw new InvalidArgumentException("Location is not a valid directory");
		// Set properties
		$this->location = $location;
	}

}
