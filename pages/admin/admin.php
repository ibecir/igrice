<?php

$categories=DB::Instance()->get_all_categories();
//print_r($categories);
include_once 'includes/header.php';
include_once 'views/admin.php';
include_once 'includes/footer.php';

?>