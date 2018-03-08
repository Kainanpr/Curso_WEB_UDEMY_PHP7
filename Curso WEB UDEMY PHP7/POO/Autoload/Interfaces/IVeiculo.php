<?php

interface IVeiculo {

	//Metodos abstratos
	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
	
}//Fim da interface

?>