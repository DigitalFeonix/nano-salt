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

class GePrecomp {

	public $yplusx;
	public $yminusx;
	public $xy2d;

	function __construct($x = null, $y = null, $z = null) {
		$this->yplusx = $x ? SplFixedArray::fromArray($x) : new SplFixedArray(10);
		$this->yminusx = $y ? SplFixedArray::fromArray($y) :new SplFixedArray(10);
		$this->xy2d = $z ? SplFixedArray::fromArray($z) :new SplFixedArray(10);
	}
}
