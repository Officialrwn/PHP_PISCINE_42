<?php

class Tyrion extends Lannister {
	public function sleepWith($name) {
		if (get_parent_class($name) == 'Lannister')
			print "Not even if I'm drunk !" . PHP_EOL;
		else if (get_class($name) == 'Sansa')
			print "Let's do this." . PHP_EOL;
	}
}

?>
