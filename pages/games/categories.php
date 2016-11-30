<?php
$games = DB::Instance ()->get_all_games ();

include_once 'includes/header.php';
include_once 'views/categories.php';
include_once 'includes/footer.php';

?>
