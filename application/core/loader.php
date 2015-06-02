<?php
	set_include_path(get_include_path()
	. PATH_SEPARATOR . "application/controllers"
	. PATH_SEPARATOR . "application/models"
	. PATH_SEPARATOR . "application/views" );
	function __autoload($className) 
	{
		require_once $className . ".php";
	}
?>