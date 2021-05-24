<?php

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'admin' && $password == 'admin')
	{
		
		$response[]=[
				      "msg"   => "Login Success!",
				      "token" => "!@#"
				    ];


	}else{

		$response[]=[
				      "msg"   => "Login Failed!",
				      "token" => ""
				    ];
				   

	}


	echo json_encode($response);

?>