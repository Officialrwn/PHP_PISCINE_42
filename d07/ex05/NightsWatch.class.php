<?php

class NightsWatch implements IFighter {
	protected function isABastard() {
		return False;
	}
	protected function makeHisFatherProud() {
		return True;
	}
	public function fight() {
	}

	public function recruit($name) {
		if ($this->isABastard())
			echo "test"; //$name->fight();
	}
}

?>