<?php

if($_SERVER['SERVER_ADMIN']=='postmaster@localhost'){
	define(BASE_URL, "http://localhost:8080/igrice/");
	define(USERNAME, "root");
	define(PASS, "aspireV3");
	define(DB, "games");
	define(HOST, "localhost");
}
else if($_SERVER['SERVER_ADMIN']=='webmaster@localhost'){
	define(BASE_URL, "http://localhost:80/igrice/");
	define(USERNAME, "root");
	define(PASS, "root");
	define(DB, "games");
	define(HOST, "localhost");
}
else {
	define(BASE_URL, "http://poslovanje.ba/enis/poslovanje/");
	define(USERNAME, "poslovan_user");
	define(PASS, "E5LZ&o-A%K[3");
	define(DB, "poslovan_01");
	define(HOST, "srv10.domenice.net");
}

?>