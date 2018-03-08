<?php

class Passaro extends Animal {
	
	public function falar() {
		return "Canta";
	}

	public function mover() {
		return "Voa e " . parent::mover();
	}

}//Fim classe


?>