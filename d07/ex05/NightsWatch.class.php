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
		if (get_class($name) == 'JonSnow')
			$this->fight();
		else
			echo "test\n";
	}
}

?>