<?php

namespace App\Controllers;

include __DIR__.'/../config/App.php';

use Config\Connect as Connect;
use Handler\CheckAuth as CheckAuth;
use Handler\Response as Response;


class MhsAuthController {


  public function data($request)
  {

  	try{

	      $mysqli = Connect::mariadb();

	  	  if(CheckAuth::auth($request['token'])){

		      $qry = "SELECT * FROM mhs";
		      
		      $exec = mysqli_query($mysqli, $qry);
		     
		      while($d = mysqli_fetch_array($exec)){

		        $data[] = [
			                   "id"          => $d['id'],
			                   "nama"        => $d['nama'],
			                   "jurusan"     => $d['jurusan'],
			                   "fakultas"    => $d['fakultas'],
			                   "nama_kampus" => $d['nama_kampus']
			                 ]; 

			    $code = "200";
			    $msg  = "OK";

		      }

	       }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	   }
	      
		  return Response::res($code, $msg=[], $data, $request);
    
    } catch(Exception $e){
      echo "error: {$e->getMessage()}";
    }  

  }


  public function detail($request)
  {

  	try{

	      $mysqli = Connect::mariadb();

	  	  if(CheckAuth::auth($request['token'])){
			 
		      $qry = "SELECT * FROM mhs WHERE nim = '$request[nim]' LIMIT 1";
		      
		      $exec = mysqli_query($mysqli, $qry);
		     
		      while($d = mysqli_fetch_array($exec)){

		        $data[] = [
			                   "id"          => $d['id'],
			                   "nama"        => $d['nama'],
			                   "jurusan"     => $d['jurusan'],
			                   "fakultas"    => $d['fakultas'],
			                   "nama_kampus" => $d['nama_kampus']
			                 ]; 

			    $code = "200";
			    $msg  = "OK";

		      }
	
	       }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	   }


		  return Response::res($code, $msg, $data, $request);

    } catch(Exception $e){
      echo "error: {$e->getMessage()}";
    }  

  }

  public function insert($request)
  {
  	 
  	try{

	     $mysqli = Connect::mariadb();

	  	 $nama        = $request['nama'];
	  	 $nim         = $request['nim'];
	  	 $jurusan     = $request['jurusan'];
	  	 $fakultas    = $request['fakultas'];
	  	 $nama_kampus = $request['nama_kampus'];

	  	 if(CheckAuth::auth($request['token'])){
			 
			 $result = mysqli_query($mysqli, "INSERT INTO mhs 
			 								   (id,nama,nim,jurusan,fakultas,nama_kampus) 
			 								  VALUES 
			 								   (null,'$nama','$nim','$jurusan','$fakultas','$nama_kampus')
			 						"); 

			 if($result){ 
				$code = "200";
				$msg  = "Data Mahasiswa Berhasil Di Input";
			 }else{
				$code = "500";
				$msg  = "Data Mahasiswa Gagal Di Input";
		     }
	   
	   	 }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	 }

		 return Response::res($code, $msg, $data=[], $request);
    
    } catch(Exception $e){
      echo $e;
    }  

	     
  }


  public function update($request)
  {
  	 
  	try{

	     $mysqli = Connect::mariadb();

	  	 $id          = $request['id'];
	  	 $nama        = $request['nama'];
	  	 $nim         = $request['nim'];
	  	 $jurusan     = $request['jurusan'];
	  	 $fakultas    = $request['fakultas'];
	  	 $nama_kampus = $request['nama_kampus'];


	  	 if(CheckAuth::auth($request['token'])){
			 
			 $result = mysqli_query($mysqli, "UPDATE mhs 
			 								   SET nama = '$nama',
			 								       nim  = '$nim',
			 								       jurusan  = '$jurusan',
			 								       fakultas  = '$fakultas',
			 								       nama_kampus  = '$nama_kampus'
			 								   WHERE id = '$id'
			 						"); 

			 if($result){ 
				$code = "200";
				$msg  = "Data Mahasiswa Berhasil Di Perbaharui";
			 }else{
				$code = "500";
				$msg  = "Data Mahasiswa Gagal Di Perbaharui";
		     }
	   
	   	 }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	 }

		 return Response::res($code, $msg, $data=[], $request);
    
    } catch(Exception $e){
      echo "error: {$e->getMessage()}";
    }  

	     
  }





  public function delete($request)
  {
  	 
  	try{

	     $mysqli = Connect::mariadb();

	  	 $id     = $request['id'];

	  	 if(CheckAuth::auth($request['token'])){

			 $result = mysqli_query($mysqli, "DELETE FROM mhs
			 								   WHERE id = '$id'
			 						"); 

			 if($result){ 
				$code = "200";
				$msg  = "Data Mahasiswa Berhasil Di Hapus";
			 }else{
				$code = "500";
				$msg  = "Data Mahasiswa Gagal Di Hapus";
		     }
	   
	   	 }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	 }

		 return Response::res($code, $msg, $data=[], $request);
    
    } catch(Exception $e){
      echo "error: {$e->getMessage()}";
    }  

	     
  }




  public function search($request)
  {
  	 
  	try{

	     $mysqli = Connect::mariadb();

	  	 $key    = $request['key'];

	  	 if(CheckAuth::auth($request['token'])){
		  	 	
			 $result = mysqli_query($mysqli, "SELECT * FROM mhs
			 								   WHERE nama LIKE '%$key%'
			 						"); 

		      while($d = mysqli_fetch_array($result)){

		        $data[] = [
			                   "id"          => $d['id'],
			                   "nama"        => $d['nama'],
			                   "nim"         => $d['nim'],
			                   "jurusan"     => $d['jurusan'],
			                   "fakultas"    => $d['fakultas'],
			                   "nama_kampus" => $d['nama_kampus']
			                 ]; 
		      }

			 if(mysqli_num_rows($result) > 0) { 
				$code = "200";
				$msg  = "Terdeteksi ".mysqli_num_rows($result)." Mahasiswa Yang Anda Cari..";
			 }else{
				$code = "404";
				$msg  = "Data Mahasiswa Tidak Ditemukan";
		     }
	   
	   	 }else{
		
				$code = "401";
				$msg  = "Token Invalid";
	   	 
	   	 }

		 return Response::res($code, $msg, $data, $request);
    
    } catch(Exception $e){
      echo "error: {$e->getMessage()}";
    }  

	     
  }




}

?>