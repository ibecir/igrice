<?php

if($_POST && $_FILES ['image'] ['size'] > 0){
	$image = addslashes ( $_FILES ['image'] ['tmp_name'] );
	$name = addslashes ( $_FILES ['image'] ['name'] );
	$image = file_get_contents ( $image );
	$image = base64_encode ( $image );
	$params=$_POST;
	$params['source'] = htmlspecialchars($params['source']);
	$params['image']=$image;
	DB::Instance()->add_new_game($params);
}

?>