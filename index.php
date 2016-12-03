 <?php
	header ( 'Access-Control-Allow-Headers: *' );
	
	error_reporting ( 0 );
	ini_set ( 'display_errors', 0 );
	
	session_start ();
	header ( 'Access-Control-Allow-Origin: *' );
	include_once 'config.php';
	include_once 'db/db.php';
	
	$arr = explode ( "/", $_GET [send] );
	
	$page = $arr [0];
	$action = $arr [1];
	$id = $arr [2];
	
	switch ($page) {
		case 'games' :
			if (file_exists ( 'pages/games/' . $action . '.php' )) {
				if ($id) {
					include_once 'pages/games/' . $action . '.php';
					break;
				} else
					header ( 'Location:' . BASE_URL );
			} else {
				include_once 'pages/index.php';
				break;
			}
		
		case 'search' :
			include_once 'pages/search/search.php';
			break;
		
		case 'admin' :
			if (file_exists ( 'pages/admin/' . $action . '.php' )) {
				include_once 'pages/admin/' . $action . '.php';
				break;
			} else {
				include_once 'pages/index.php';
				break;
			}
		
		case '' :
			include_once 'pages/home/index.php';
			break;
		default :
			header ( 'Location:' . BASE_URL );
			die ();
			break;
	}
	?>