<?php


	function load_config($class_name)
	{
	    $class_name = substr($class_name, strrpos($class_name, "\\") + 1);
		$path_to_file = '../../app/config/' . $class_name . '.php';

		if (file_exists($path_to_file)) {
			require_once $path_to_file;
		}

	}

	function load_controllers($class_name)
	{
	    $class_name = substr($class_name, strrpos($class_name, "\\") + 1);
		$path_to_file = '../../app/controllers/' . $class_name . '.php';

		if (file_exists($path_to_file)) {
			include $path_to_file;
		}
	}

	function load_handler($class_name)
	{
	    $class_name = substr($class_name, strrpos($class_name, "\\") + 1);
		$path_to_file = '../../app/handler/' . $class_name . '.php';

		if (file_exists($path_to_file)) {
			include $path_to_file;
		}
	}

	spl_autoload_register('load_config');
	spl_autoload_register('load_controllers');
	spl_autoload_register('load_handler');




?>