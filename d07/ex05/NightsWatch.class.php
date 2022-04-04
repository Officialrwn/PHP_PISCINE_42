<?php

class NightsWatch implements IFighter {
	public function fight() {
	}

	public function recruit($name) {
		if ($name instanceof IFighter)
			$name->fight();
	}
}

?>