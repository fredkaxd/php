<?php
	include_once('Drapieznikinterface.php');
	include_once('Zabojca.php');
	include_once('Zwierz.php');
	
	class Drapieznik extends Zwierz implements DrapieznikInterface{
		
		private $zabojca;

		function __construct(){
		}
	
		public function getPredkoscMaksymalna(){
			return $this->zabojca->getLiczbaNog() * $this->zabojca->getWaga();	  
	    }
	  
		public function getPrzyspieszenie(){
			return $this->zabojca->getLiczbaNog() / $this->zabojca->getWaga();  
		}
		
		public function zmien($zabojca){
            $this->zabojca = $zabojca;
		}
		
		public function getParametry (){
    	return "Prędkość maksymalna: ".$this->getPredkoscMaksymalna()." Przyspieszenie: ".$this->getPrzyspieszenie();
		}
	}