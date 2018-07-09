<?php

namespace DigitalFeonix\NanoSalt;

use \SplFixedArray;

/**
 * Ed25519 - ref10
 *
 * Assembled from:
 *  - https://github.com/jedisct1/libsodium/
 *  - https://github.com/agl/ed25519/
 *
 *
 * @link   https://github.com/devi/Salt
 *
 */

class GeCached {

	public $YplusX;
	public $YminusX;
	public $Z;
	public $T2d;

	function __construct() {
		$this->YplusX = new SplFixedArray(10);
		$this->YminusX = new SplFixedArray(10);
		$this->Z = new SplFixedArray(10);
		$this->T2d = new SplFixedArray(10);
	}

}
