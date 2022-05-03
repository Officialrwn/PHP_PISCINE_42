<?php

class NightsWatch implements IFighter {
	public function recruit($name) {
		if ($name instanceof IFighter)
			$this->fighters[] = $name;
	}

	public function fight() {
		foreach($this->fighters as $name)
			print ($name->fight());
	}
}

?>