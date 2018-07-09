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

class GeProjective {

	public $X;
	public $Y;
	public $Z;

	function __construct(){
		$this->X = new SplFixedArray(10);
		$this->Y = new SplFixedArray(10);
		$this->Z = new SplFixedArray(10);
	}
}
