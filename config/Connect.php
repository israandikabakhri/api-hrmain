<?php

namespace Config;

class Connect {

	public function mariadb()
	{
		
	  date_default_timezone_set('Asia/Makassar');

	  $databaseHost = 'localhost';
	  $databaseName = 'db_api';
	  $databaseUsername = 'root';
	  $databasePassword = '';
	   
	  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, '3399'); 

	  return $mysqli;
	  
	}


}