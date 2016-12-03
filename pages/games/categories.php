<?php
$games = DB::Instance ()->get_all_games_by_category_id ($id);
$categry_name=$games['category_name']['name'];
unset ($games['category_name']);
include_once 'includes/header.php';
include_once 'views/categories.php';
include_once 'includes/footer.php';

?>
