<?php
$game = DB::Instance ()->get_game_by_id ( $id );
$game [0] ['game_source'] = htmlspecialchars_decode ( $game [0] ['game_source'] );

include_once 'includes/header.php';
include_once 'views/play.php';
include_once 'includes/footer.php';

?>