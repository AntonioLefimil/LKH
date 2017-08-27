<?php
	/* app config */
	define("CTX_PATH", $_SERVER['DOCUMENT_ROOT'].'/LKHV1');
	define("SITE_MAP", CTX_PATH."/src/controller/site.xml");
	define("CTX_EXE", CTX_PATH."/instancias/Modificado");
	define("WELCOME_PAGE", "index.htm");
	define('LOG_DIR', '/logs');
	define('LOG_LEVEL', 'DEBUG');
	define('DEV_MOBILE', '1');
	
	/* propiedades de conexion */
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'lkh');
	define('DB_PORT', '3306');
	
	