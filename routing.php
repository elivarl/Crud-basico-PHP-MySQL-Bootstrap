<?php 


$controllers=array(
	'alumno'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('alumno','error');
	}		
}else{
	call('alumno','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'alumno':
		require_once('Model/Alumno.php');
		$controller= new UsuarioController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>