
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


$data = json_decode(file_get_contents("php://input"));

if(isset($data))


	{
	$sku = $crud->escape_string($data->sku);	
	$name = $crud->escape_string($data->name);
	$price = $crud->escape_string($data->price);
	$size = $crud->escape_string($data->size);
	$weight = $crud->escape_string($data->weight);
	$height = $crud->escape_string($data->height);
	$width = $crud->escape_string($data->width);
	$length = $crud->escape_string($data->length);
	if($height && $width && $length){
		$dimension = $height . " x " . $width . " x " . $length;
	}

	if($sku && $name  && $price)
	{
		http_response_code(201);
		$result = $crud->execute("INSERT INTO products (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension')");
		echo "Product Added Successfully";
		
	}

		
	
	
	
	
	
}



?>