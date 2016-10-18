 <?php
header('Access-Control-Allow-Headers: *');

error_reporting(0);
ini_set('display_errors', 0);

session_start();
header('Access-Control-Allow-Origin: *');
include_once 'config.php';
include_once 'db/db.php';

$arr = explode ( "/", $_GET [send] );

$page = $arr [0];
$action = $arr [1];
$id = $arr [2];


switch ($page) {
	case 'becko' :
		include_once 'home/index.php';
		break;
	case 'admin' :
		include_once 'admin/index.php';
		break;
	default :
		include_once 'home/index.php';
		break;
}
?>