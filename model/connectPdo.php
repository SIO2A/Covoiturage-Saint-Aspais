<?php

class connectPdo 
{
	private static $db; 
	
	private function __construct(){} 
	
	static function getObjPdo() {
		 
		 if(!isset(self::$db))
		 { 
		  self::$db = new PDO('mysql:host=mysql-ainaralijaona.alwaysdata.net; dbname=ainaralijaona_covoiturage; charset=utf8', '252604_login', 'campussaintaspais');
		  self::$db ->query('SET NAMES utf8'); 
		  self::$db->query('SET CHARACTER SET utf8');   
		 } 
		return self::$db;
    }
}