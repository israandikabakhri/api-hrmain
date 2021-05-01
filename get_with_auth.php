<?php 

use App\Controllers\MhsController;

include __DIR__."/controllers/MhsController.php";

$datas[]=["token"=>$_POST['token']];

echo MhsController::dataAuth($datas[0]);

?>