 <?php
header('Access-Control-Allow-Headers: *');

error_reporting(0);
ini_set('display_errors', 0);

session_start();
header('Access-Control-Allow-Origin: *');




$arr = explode ( "/", $_GET [send] );

$page = $arr [0];
$action = $arr [1];
$id = $arr [2];


switch ($page) {
	case '' :
		include_once 'views/index.php';
		break;
	default :
		include_once 'views/index.php';
		break;
}
?>