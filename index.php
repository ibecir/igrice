 <?php
header('Access-Control-Allow-Headers: *');

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
header('Access-Control-Allow-Origin: *');
include_once 'config.php';
include_once 'db/db.php';

$arr = explode ( "/", $_GET [send] );

$page = $arr [0];
$action = $arr [1];
$id = $arr [2];

echo BASE_URL;

switch ($page) {
	case 'play' :
		include_once 'home/play.php';
		break;
	case 'admin' :
		include_once 'admin/index.php';
		break;
	default :
		include_once 'home/index.php';
		break;
}
?>