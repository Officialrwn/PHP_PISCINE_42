<?php

class Tyrion extends Lannister {
	public function sleepWith($name) {
		if (get_class($name) == 'Jaime' || get_class($name) == 'Cersei')
			print "Not even if I'm drunk !" . PHP_EOL;
		else
			print "Let's do this" . PHP_EOL;
	}
}

?>
