<?php

class Fighter {
	protected static $fighters = [];
	public static $clone = False;

	public function __construct($string) {
		if (!Self::$clone)
		{
			if (array_key_exists($string, Self::$fighters))
				Print("(Factory already absorbed a fighter of type $string)" . PHP_EOL);
			else
			{
				Self::$fighters[$string] = get_class($this);
				Print("(Factory absorbed a fighter of type $string)" . PHP_EOL);
			}
		}
	}
}

?>