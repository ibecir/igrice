<?php
$game = DB::Instance ()->get_game_by_id ( $id );
print_r ( $game );

include_once 'includes/header.php';
include_once 'views/play.php';
include_once 'includes/footer.php';

?>