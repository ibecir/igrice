<?php
$top_games=DB::Instance()->get_top_games();
$games = DB::Instance()->get_all_games();
$categories = DB::Instance()->get_all_categories();
//print_r($games);
include_once 'includes/header.php';
include_once 'views/index.php';
include_once 'includes/footer.php';

?>