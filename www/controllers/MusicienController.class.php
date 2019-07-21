<?php
declare(strict_types = 1);
namespace controllers;

use core\View;

class MusicienController{
	
	public function defaultAction(){

	  $musicien = array(
		"0" => "Vivaldi",
		"1" => "Mozart",
		"2" => "toto",
		"3" => "tata",
		"4" => "tete",
		"5" => "titi",
		"6" => "tutu",
		"7" => "tyty",
		"8" => "plop",
		"9" => "yolo",
	  );
    
	 for($i = 0; $i <= 5; $i++)
	 {  
	   	$rand = rand(0,5);
		echo $musicien[$rand] . '<br />'; 
	 } 
    
	}
	

}