<?php

namespace Handler;

include __DIR__.'/../handler/Resource.php';
use Handler\Response as Response;

class Response {
	 	
  public $code;	
  public $data;	
  public $request;		

  public function resFull($code, $msg, $data, $request)
  {

		 $responses = [
		 				 "code" => $code,
		 				 "msg"  => $msg,
		 				 "data" => $data
		 			    ];


		 $requests  = $request;
		 $resource    = Resource::by();

		 $json=[
		 			"response"=>$responses,
		 			"request" =>$requests,
		 			"resource"=>$resource,
		 		 ];

  	 return json_encode([$json]);

  }

  public function res($code, $msg, $data, $request)
  {
  	return json_encode($data);
  }


}

?>