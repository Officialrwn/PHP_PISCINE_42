<?php

abstract class House {
	abstract protected function getHouseName();
	abstract protected function getHouseSeat();
	abstract protected function getHouseMotto();

	public function introduce() {
		print (
			"House " . 
			$this->getHouseName() . " of " . 
			$this->getHouseSeat() . " : \"" . 
			$this->getHouseMotto() . "\"" . PHP_EOL
		);
	}
}

?>