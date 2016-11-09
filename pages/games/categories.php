<?php
$games = DB::Instance ()->get_all_games_by_category_id ( $id );

include_once 'includes/header.php';
include_once 'views/categories.php';
include_once 'includes/footer.php';

?>
