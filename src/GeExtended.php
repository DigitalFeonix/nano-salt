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

class GeExtended extends GeProjective {

	public $T;

	function __construct(){
		parent::__construct();
		$this->T = new SplFixedArray(10);
	}
}
