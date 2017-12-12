<?php 
	require_once('connection.php');

	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='alumno';
		$action='index';
	}
	require_once('Views/Layouts/layout.php');	
 ?>