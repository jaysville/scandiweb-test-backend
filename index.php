<?php 

//including the database connection file
include 'headers.php';
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM products ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;


 echo json_encode($result);


 