<?php
$games = DB::Instance ()->get_games_by_keyword( $id );

include_once 'includes/header.php';
include_once 'views/search.php';
include_once 'includes/footer.php';

?>
