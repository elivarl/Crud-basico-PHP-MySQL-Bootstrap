<?php 
/**
* 
*/
class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Alumno/bienvenido.php');
	}

	function register(){
		require_once('Views/Alumno/register.php');
	}

	function save(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$alumno= new Alumno(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Alumno::save($alumno);
		$this->show();
	}

	function show(){
		$listaAlumnos=Alumno::all();

		require_once('Views/Alumno/show.php');
	}

	function updateshow(){
		$id=$_GET['idAlumno'];
		$alumno=Alumno::searchById($id);
		require_once('Views/Alumno/updateshow.php');
	}

	function update(){
		$alumno = new Alumno($_POST['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['estado']);
		Alumno::update($alumno);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Alumno::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$alumno=Alumno::searchById($id);
			$listaAlumnos[]=$alumno;
			//var_dump($id);
			//die();
			require_once('Views/Alumno/show.php');
		} else {
			$listaAlumnos=Alumno::all();

			require_once('Views/Alumno/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Alumno/error.php');
	}

}

?>