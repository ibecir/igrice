<?php

final class DB {
	private $pdo;
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new DB ();
		}
		return $inst;
	}
	
	public function __construct() {
		require_once dirname(__FILE__).'/../config.php';
		$this->pdo = new PDO ( 'mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USERNAME, PASS, array (
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		) );
	}
	
	public function get_all_games(){
		$result=$this->pdo->query("SELECT * FROM igrice")->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}

?>