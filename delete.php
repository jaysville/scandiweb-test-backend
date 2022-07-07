<?php
include_once("classes/Crud.php");
include_once("classes/Validation.php");
include_once 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$crud = new Crud();





$data = json_decode(file_get_contents("php://input",true));

if(isset($data)){
	foreach ($data as $key => $id) {
		$result = $crud->delete($id, 'products');	
	}
}
	




?>
