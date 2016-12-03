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
		$result = $statement->fetchAll (PDO::FETCH_ASSOC);
		return $result;
	}
	public function increase_popularity($id){
		$statement = $this->pdo->prepare ( "SELECT popularity FROM games WHERE id = ?" );
		$statement->execute ( array (
				$id
		) );
		$result = $statement->fetchAll (PDO::FETCH_ASSOC);
		$result = reset($result);
		$result=intval($result['popularity']);
		$result=$result+1;
		$upd_statement=$this->pdo->prepare("UPDATE games SET popularity=:pop WHERE id=:id");
		$upd_statement->bindParam(':pop',$result);
		$upd_statement->bindParam(':id',$id);
		$upd_statement->execute();
	}
	public function get_all_games_by_category_id($id) {
		$statement = $this->pdo->prepare ( "SELECT * FROM games WHERE category_id = ?" );
		$statement->execute ( array (
				$id 
		) );
		$result = $statement->fetchAll ();
		$stmt=$this->pdo->prepare("SELECT name FROM categories WHERE id=?");
		$stmt->execute ( array (
				$id
		) );
		$res = $stmt->fetchAll (PDO::FETCH_ASSOC);
		$result['category_name']=reset($res);
		return $result;
	}
	public function get_games_by_keyword($keyword) {
		$statement = $this->pdo->prepare ( "SELECT * FROM games WHERE name LIKE CONCAT('%',?,'%');" );
		$statement->execute ( array (
				$keyword 
		) );
		$result = $statement->fetchAll ();
		return $result;
	}
}

?>