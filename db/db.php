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
		require_once dirname ( __FILE__ ) . '/../config.php';
		$this->pdo = new PDO ( 'mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USERNAME, PASS, array (
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		) );
	}
	public function get_all_games() {
		$result = $this->pdo->query ( "SELECT * FROM games ORDER BY games.category_id" )->fetchAll ( PDO::FETCH_ASSOC );
		return $result;
	}
	public function get_all_categories() {
		$result = $this->pdo->query ( "SELECT * FROM categories" )->fetchAll ( PDO::FETCH_ASSOC );
		return $result;
	}
	public function add_new_game($params) {
		print_r ( $params );
		$stmt = $this->pdo->prepare ( "INSERT INTO games (name,game_source,icon,description,category_id) VALUES (:name,:source,:icon,:desc,:category)" );
		$stmt->bindParam ( ':name', $params ['name'] );
		$stmt->bindParam ( ':source', $params ['source'] );
		$stmt->bindParam ( ':icon', $params ['image'] );
		$stmt->bindParam ( ':desc', $params ['description'] );
		$stmt->bindParam ( ':category', $params ['category'] );
		$stmt->execute ();
	}
	public function get_game_by_id($id) {
		$statement = $this->pdo->prepare ( "SELECT * FROM games WHERE id = ?" );
		$statement->execute ( array (
				$id 
		) );
		$result = $statement->fetchAll ();
		return $result;
	}
}

?>