<?php

include_once('Fighter.class.php');

class UnHolyFactory extends Fighter {

	public function __construct() {
	}

	public function absorb($fighter) {
		if (!$fighter instanceof Fighter)
			Print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($fighter) {
		if (array_key_exists($fighter, Self::$fighters))
		{
			Print("(Factory fabricates a fighter of type $fighter)" . PHP_EOL);
			Fighter::$clone = True;
 			return (new Self::$fighters[$fighter]);
		}	
		else
			Print("(Factory hasn't absorbed any fighter of type $fighter)" . PHP_EOL);
	}
}

?>