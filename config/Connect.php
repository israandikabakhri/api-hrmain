<?php

namespace Config;

class Connect {

	public function mariadb()
	{
		
	  date_default_timezone_set('Asia/Makassar');

	  $databaseHost     = 'localhost';
	  $databaseName     = 'db_api';
	  $databaseUsername = 'root';
	  $databasePassword = '';
	  $databasePort     = '3399';
	   
	  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort); 

	  return $mysqli;
	  
	}


}