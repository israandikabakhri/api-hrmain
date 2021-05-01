<?php

namespace Handler;

include __DIR__.'/../handler/Resource.php';
use Handler\Resource as Resource;

include __DIR__.'/../handler/CheckAuth.php';
use Handler\CheckAuth as CheckAuth;


class Response {
	 	
  public $code;	
  public $data;	
  public $request;		

  public function res($code, $msg, $data, $request)
  {

		 $responses = [
		 				 "code" => $code,
		 				 "msg" => $msg,
		 				 "data" => $data
		 			    ];


		 $requests  = $request;
		 $resource    = Resource::by();

		 $json=[
		 			"response"=>$responses,
		 			"request" =>$requests,
		 			"resource"=>$resource,
		 		 ];

  	 return json_encode($json);

  }

  public function res_auth($code, $msg, $data, $request)
  {

  	 if(CheckAuth::auth($request['token']))
  	 {

		 $responses = [
		 				 "code" => $code,
		 				 "msg" => $msg,
		 				 "data" => $data
		 			    ];

		 $requests  = $request;
		 $resource    = Resource::by();


	 }else{

		 $responses = [
		 				 "code" => '401',
		 				 "code" => 'Token Invalid',
		 				 "data" => []
		 			    ];

		 $requests  = $request;
		 $resource    = Resource::by();

	 }
		 $json=[
		 			"response"=>$responses,
		 			"request" =>$requests,
		 			"resource"=>$resource,
		 		 ];

  	 return json_encode($json);

  }

}

?>