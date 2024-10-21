<?php


$controller ="clap"; 
if(!isset($_REQUEST["controller"])){
	require_once "controller/$controller.controller.php";
	$controller= ucwords($controller)."Controller";
	$controller= new $controller;
	$controller->Index();

}else {
	$controller= strtolower($_REQUEST["controller"]);
	$accion = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "Index";
	require_once "controller/$controller.controller.php";
	$controller = ucwords($controller)."Controller";
	$controller = new $controller;
	call_user_func(array($controller, $accion));
}


?>