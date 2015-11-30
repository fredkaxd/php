<?php
		include_once('Zwierz.php');
		include_once('Drapieznik.php');
		include_once('Zabojca.php');
		/*$zwierz = new Zwierz();
		$wierz->otoZwierz();*/
		//$mojZwierz = new Zwierz("szynszyl", "samiec", "szary", "sqeek sqeek");
		//$innyZwierz = new Zwierz("kruk", "samiec", "czarny", "kra kra");
		/*echo $mojZwierz->otoZwierz();
		echo $innyZwierz->otoZwierz();*/
		
		//$z = new Zwierz("panda", "samica", "czarno-biała", "sweeet sweeet");
		//echo otoZwierz(Zwierz $z){
		//return "Witaj! to ja - Twój/Twoja ".$z->gatunek." jestem ".$z->umaszczenie." i wydam dla Ciebie słodkie ".$z->wydawanyDzwiek;		 
		//}
		
		$drapieżnik = new Drapieznik();
		$drapieżnik->zmien(new Zabojca(10,4));
		echo $drapieżnik->getParametry()."\n"; 
		//echo "Zmiana zabójcy \n";
		//$drapieżnik->zmien(new Zabojca(30,2));
		//echo $drapieżnik->getParametry()."\n"; 