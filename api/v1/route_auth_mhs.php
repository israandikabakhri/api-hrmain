<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

include "../../autoload.php";

use App\Controllers\MhsAuthController;


$page = $_GET['p'];

if($page == "data_mhs"){


	$datas[]=[
				"token"=>$_POST['token']
			 ];

    echo MhsAuthController::data($datas[0]); 


}elseif($page == "detail_data_mhs"){

	
	$datas[]=[  
		   		"token"=>$_POST['token'],
				"nim"=>$_POST['nim']
			 ];

	echo MhsAuthController::detail($datas[0]);


}elseif($page == "insert_mhs"){


	$datas[]=[
		   	  "token"=>$_POST['token'],
			  "nama"=>$_POST['nama'],
			  "nim"=>$_POST['nim'],
			  "jurusan"=>$_POST['jurusan'],
			  "fakultas"=>$_POST['fakultas'],
			  "nama_kampus"=>$_POST['nama_kampus'],
	         ];

	echo MhsAuthController::insert($datas[0]);


}elseif($page == "update_mhs")
{


	$datas[]=[
		   	  "token"=>$_POST['token'],
			  "id"=>$_POST['id'],
			  "nama"=>$_POST['nama'],
			  "nim"=>$_POST['nim'],
			  "jurusan"=>$_POST['jurusan'],
			  "fakultas"=>$_POST['fakultas'],
			  "nama_kampus"=>$_POST['nama_kampus'],
	         ];

	echo MhsAuthController::update($datas[0]);


}elseif($page == "delete_mhs")
{


	$datas[]=[
		   	  "token"=>$_POST['token'],
			  "id"=>$_POST['id']
	         ];

	echo MhsAuthController::delete($datas[0]);


}elseif($page == "search_mhs")
{


	$datas[]=[
		   	  "token"=>$_POST['token'],
			  "key"=>$_POST['key']
	         ];

	echo MhsAuthController::search($datas[0]);


}



?>