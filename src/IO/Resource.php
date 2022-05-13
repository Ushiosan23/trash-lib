<?php

namespace ushiosan23\IO;

trait Resource {

	protected string $location;

	public function exists(): bool {
		return file_exists($this->location);
	}

	public function realpath(): string {
		if ($this->exists()) {
			return realpath($this->location);
		} else {
			return preg_replace("/([/|\\\])/", DIRECTORY_SEPARATOR, $this->location);
		}
	}

}
