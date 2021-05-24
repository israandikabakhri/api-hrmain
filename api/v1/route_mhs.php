<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

include "../../autoload.php";

use App\Controllers\MhsController;
 
$page = $_GET['p'];

if($page == "data_mhs"){


    echo MhsController::data(); 


}elseif($page == "detail_data_mhs"){

	
	$datas[]=[
				"nim"=>$_POST['nim']
			 ];

	echo MhsController::detail($datas[0]);


}elseif($page == "insert_mhs"){


	$datas[]=[
			  "nama"=>$_POST['nama'],
			  "nim"=>$_POST['nim'],
			  "jurusan"=>$_POST['jurusan'],
			  "fakultas"=>$_POST['fakultas'],
			  "nama_kampus"=>$_POST['nama_kampus'],
	         ];

	echo MhsController::insert($datas[0]);


}elseif($page == "update_mhs")
{


	$datas[]=[
			  "id"=>$_POST['id'],
			  "nama"=>$_POST['nama'],
			  "nim"=>$_POST['nim'],
			  "jurusan"=>$_POST['jurusan'],
			  "fakultas"=>$_POST['fakultas'],
			  "nama_kampus"=>$_POST['nama_kampus'],
	         ];

	echo MhsController::update($datas[0]);


}elseif($page == "delete_mhs")
{


	$datas[]=[
			  "id"=>$_POST['id']
	         ];

	echo MhsController::delete($datas[0]);


}elseif($page == "search_mhs")
{


	$datas[]=[
			  "key"=>$_POST['key']
	         ];

	echo MhsController::search($datas[0]);


}



?>