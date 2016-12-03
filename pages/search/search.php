<?php
$keyword = urldecode ( preg_replace ( "/[^A-Za-z0-9- ]/", '', $_GET [k] ) );

$games = DB::Instance ()->get_games_by_keyword ( $keyword );

include_once 'includes/header.php';
include_once 'views/search.php';
include_once 'includes/footer.php';

?>
